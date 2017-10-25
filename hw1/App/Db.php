<?php


namespace App;

class Db
{

    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=news', 'root', '');
    }

    public function execute($sql,$data=[])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        return $res;
    }

    public function query($sql, $class, $data=[])
    {
        var_dump($sql);
        var_dump($data);
        $sth = $this->dbh->prepare($sql);
        var_dump($sth);
        $res = $sth->execute($data);
        var_dump($res);
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }

}