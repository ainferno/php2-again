<?php


namespace App;

class Db
{
    use Singleton;
    protected $dbh;

    private function __construct()
    {
        $config =  Config::instance();
        $data = $config->data['db'];
        //var_dump($config->data['db']);
        $this->dbh = new \PDO('mysql:host='.$data['host'].';dbname='.$data['dbname'], $data['user'], $data['password']);
    }
    
    public function check()
    {
        if(self != null)
            return true;
        return false;
    }

    public function execute($sql,$data=[])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        return $res;
    }

    public function query($sql, $class, $data=[])
    {
        //var_dump($sql);
        //var_dump($data);
        $sth = $this->dbh->prepare($sql);
        //var_dump($sth);
        $res = $sth->execute($data);
        //var_dump($res);
        
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS);
        }
        return [];
    }
    public function queryEach($sql, $class, $data=[])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        $sth->setFetchMode(\PDO::FETCH_CLASS, $class);
        $dat = $sth->fetch();
        while($dat != null) {
            yield $dat;
            $dat = $sth->fetch();
        }
        
    }

}