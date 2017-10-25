<?php

require __DIR__ . '/autoload.php';

$news = \App\Models\News::findLast(3);

var_dump($news);

include __DIR__ .'/template.php';