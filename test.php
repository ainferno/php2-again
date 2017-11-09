<?php

date_default_timezone_set('Europe/Moscow');

if (!file_exists(__DIR__ .'/../qwe')) {
            mkdir(__DIR__ .'/../Logs\\', 0777, true);
        }

//$f = fopen(__DIR__ .'../Logs/'..'.txt','a');
echo __DIR__ .'..\\Logs\\'.date('Y').'\\'.date('M').'\\'.date('h:i:s');
//echo date('jS \of F Y h:i:s A');
//        fwrite($f,"Error #".$ex->getCode().": ".$ex->getMessage().PHP_EOL . PHP_EOL);
//        fclose($f); 