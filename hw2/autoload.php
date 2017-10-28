<?php

/**
 * App\Models\User => ./App/Models/User.php
 */
function __autoload($class)
{
    //echo __DIR__ .'   ';
    //var_dump($class);
    //echo '<br>';
    require __DIR__ . '/' .str_replace('\\', '/', $class) . '.php';
}