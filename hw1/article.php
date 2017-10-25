<?php
    require __DIR__ . '/autoload.php';
    
    if(isset($_GET['id']))
        $article = \App\Models\News::findlast($_GET['id']);
    
    include __DIR__ .'/template2.php';
?>