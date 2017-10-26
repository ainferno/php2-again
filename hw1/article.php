<?php
    require __DIR__ . '/autoload.php';
    
    if(isset($_GET['id']))
        $article = \App\Models\News::findById($_GET['id']);
    //var_dump($article);
    include __DIR__ .'/template2.php';
?>