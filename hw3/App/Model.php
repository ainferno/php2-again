<?php

namespace App;

abstract class Model
{

    const TABLE = '';

    public static function findAll()
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }
    public static function findById($id)
    {
        $db = Db::instance();
        $res = $db->query(
            'SELECT * FROM '.static::TABLE.' WHERE id=:id',
            static::class,
            ['id' => $id]
        );
        return $res[0];
    }
    
    public static function findLast($limit=1)
    {
        $db = Db::instance();
        //echo 'SELECT * FROM '.static::TABLE.' ORDER BY id DESC LIMIT '.$num;
        $res = $db->query(
            'SELECT * FROM '.static::TABLE.' ORDER BY id DESC LIMIT '.$limit,
            static::class
        );
        //var_dump($res);
        return $res;
    }
    
    public function isNew()
    {
        return empty($this->id);
    }
    
    protected function insert()
    {
        if (!$this->isNew()) {
            return;
        }

        $columns = [];
        $values = [];
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $columns[] = $k;
            $values[':'.$k] = $v;
        }

        $sql = '
        INSERT INTO ' . static::TABLE . '
        (' . implode(',', $columns) . ')
        VALUES
        (' . implode(',', array_keys($values)) . ')
        ';
        
        $db = Db::instance();
        $db->execute($sql, $values);
        $last = \App\Models\News::findLast();
        //var_dump($last);
        $this->id = $last[0]->id;
    }
//    UPDATE news SET Name = "isn't", Title="Finally", Body="Working" WHERE id=17
    protected function update()
    {
        if($this->isNew())
            return;
        
        $columns = [];
        $values = [];
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $upd[$k] = $k.'=:'.$k;
            $values[$k] = $v;
        }
        $values['id'] = $this->id;
        $sql = '
        UPDATE ' . static::TABLE . ' SET 
        ' . implode(',', $upd) . '
        WHERE id=:id
        ';
        
        $db = Db::instance();
        $db->execute($sql, $values);
    }
    public function delete()
    {
        if($this->isNew())
            return;
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id';
        $db = Db::instance();
        $db->execute($sql,['id' => $this->id]);
    }
    public function save()
    {
        if($this->isNew())
            $this->insert();
        else
            $this->update();
    }
}