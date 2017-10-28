<?php

require __DIR__ . '/autoload.php';
//var_dump($_POST);
if(isset($_POST['behaviour']) && ($_POST['behaviour'] == 'delete') && isset($_POST['id']) && !($_POST['id'] === null))
{
    $article = new \App\Models\News();
    $article->id = $_POST['id'];
    $article->delete();
}
if(isset($_POST['behaviour']) && ($_POST['behaviour'] == 'create') && isset($_POST['Name']) && !($_POST['Name'] === null) && isset($_POST['Title']) && !($_POST['Title'] === null))
{
    $article = new \App\Models\News();
    $article->Name = $_POST['Name'];
    $article->Title = $_POST['Title'];
    $article->Body = $_POST['Body'];
    $article->save();
}

//$article = new \App\Models\News();
//$article->id = 28;
//$article->Name = 'Insert4';
//$article->Title = 'Test';
//$article->Body = 'body';
//$article->delete();
//$article->save();
//var_dump($news);

$news = \App\Models\News::findlast(3);
include __DIR__ .'/template.php';