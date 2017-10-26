<?php

namespace App;

abstract class Model
{

    const TABLE = '';

    public static function findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }
    public static function findById($id)
    {
        $db = new Db();
        $res = $db->query(
            'SELECT * FROM '.static::TABLE.' WHERE id=:id',
            static::class,
            ['id' => $id]
        );
        return $res;
    }
    
    public static function findLast($limit=1)
    {
        $db = new Db();
        //echo 'SELECT * FROM '.static::TABLE.' ORDER BY id DESC LIMIT '.$num;
        $res = $db->query(
            'SELECT * FROM '.static::TABLE.' ORDER BY id DESC LIMIT '.$limit,
            static::class
        );
        //var_dump($res);
        return $res;
    }
}