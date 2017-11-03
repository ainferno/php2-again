<?php

require __DIR__ . '/autoload.php';

$url = $_SERVER['REQUEST_URI'];
if(isset($_GET['ctrl']))
{
    switch($_GET['ctrl'])
    {
        case 'User': 
            $controller = new \App\Controllers\UserController();
        break;
        case 'Admin':
            $controller = new \App\Controllers\AdminController();
        break;
        default:
            $controller = new \App\Controllers\UserController();
    }   
}
else
    $controller = new \App\Controllers\UserController();
if(isset($_GET['action']))
{
    $action = $_GET['action'];
}
else
    $action = 'Index';
$controller->action($action);


//var_dump($_POST);
/*if(isset($_POST['behaviour']) && ($_POST['behaviour'] == 'delete') && isset($_POST['id']) && !($_POST['id'] === null))
{
    //var_dump($_POST);
    $article = new \App\Models\News();
    $article->id = $_POST['id'];
    //var_dump($article);
    $article->delete();
}
if(isset($_POST['behaviour']) && ($_POST['behaviour'] == 'create') && isset($_POST['Name']) && !($_POST['Name'] === null) && isset($_POST['Title']) && !($_POST['Title'] === null))
{
    //var_dump($_POST);
    $article = new \App\Models\News();
    $article->author_id = $_POST['author_id'];
    $article->Name = $_POST['Name'];
    $article->Title = $_POST['Title'];
    $article->Body = $_POST['Body'];
    $article->save();
}

$_SERVER['REQUEST_URI'];

//$article = new \App\Models\News();
//$article->id = 28;
//$article->Name = 'Insert4';
//$article->Title = 'Test';
//$article->Body = 'body';
//$article->delete();
//$article->save();
//var_dump($news);

$news = \App\Models\News::findlast(3);
//var_dump($news);
//var_dump($news[0]->author()->Name);
$vw = new \App\View();
$vw->authors = \App\Models\Author::findAll();

$vw->news = $news;

//var_dump($vw->news);
$vw->display(__DIR__ .'/App/templates/template.php');*/