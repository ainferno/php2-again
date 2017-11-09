<?php

namespace App\Models;

use App\Model;

class News extends Model
{
    const TABLE = 'news';
    
    public $id;
    public $author_id;
    public $Name;
    public $Title;
    public $Body;
    
    public function author()
    {
        return \App\Models\Author::findById($this->author_id);
    }
    public static function self_create(array $data = [])
    {
        if((!(isset($data['Name'])) || $data['Name'] == null) ||
          (!(isset($data['Title'])) || $data['Title'] == null) ||
          (!(isset($data['Body'])) || $data['Body'] == null) ||
          (!(isset($data['author_id'])) || $data['author_id'] == null)
        )
            return null;
            
        $me = new \App\Models\News();
        $me->Name=$data['Name'];
        $me->Title=$data['Title'];
        $me->Body=$data['Body'];
        $me->author_id=$data['author_id'];
        return $me;
    }
    public function self_update(array $data = [])
    {
        if(isset($data['Name']) && !($data['Name'] == null))
            $this->Name = $data['Name'];
        if(isset($data['Title']) && !($data['Title'] == null))
            $this->Title = $data['Title'];
        if(isset($data['Body']) && !($data['Body'] == null))
            $this->Body = $data['Body'];
        if(isset($data['author_id']) && !($data['author_id'] == null))
            $this->author_id = $data['author_id'];
    }
    /*public function __construct($Name,$Title,$Body)
    {
        $this->Name=$Name;
        $this->Title=$Title;
        $this->Body=$Body;
    }*/
    
}