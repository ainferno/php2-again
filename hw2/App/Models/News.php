<?php

namespace App\Models;

use App\Model;

class News extends Model
{
    const TABLE = 'news';
    
    public $id;
    public $Name;
    public $Title;
    public $Body;
    
    /*public function __construct($Name,$Title,$Body)
    {
        $this->Name=$Name;
        $this->Title=$Title;
        $this->Body=$Body;
    }*/
    
}