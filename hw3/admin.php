<?php

require __DIR__ . '/autoload.php';
//var_dump($_POST);
$vw = new \App\View();

if(isset($_POST['behaviour']) && $_POST['behaviour'] == 'createfin' && isset($_POST['Name']) && !($_POST['Name'] === null) && !($_POST['Name'] === ""))
{
    //var_dump($_POST);
    $auth = new \App\Models\Author();
    $auth->Name = $_POST['Name'];
    //var_dump($auth);
    $auth->save();
}
if(isset($_POST['behaviour']) && $_POST['behaviour'] == 'deletefin' && isset($_POST['id']) && !($_POST['id'] === null))
{
    $auth = new \App\Models\Author();
    $auth->id = $_POST['id'];
    $auth->delete();
}
if(isset($_POST['behaviour']) && $_POST['behaviour'] == 'changefin' && isset($_POST['id']) && !($_POST['id'] === null) && isset($_POST['Name']) && !($_POST['Name'] == ""))
{
    $auth = new \App\Models\Author();
    $auth->id = $_POST['id'];
    $auth->Name = $_POST['Name'];
    $auth->save();
}


if(isset($_POST['behaviour']) && $_POST['behaviour'] == 'create')
    $vw->form = 'create';
elseif(isset($_POST['behaviour']) && $_POST['behaviour'] == 'change')
{
    $vw->form = 'change';
}
elseif(isset($_POST['behaviour']) && $_POST['behaviour'] == 'change2')
{
    $vw->form = 'change2';
    $vw->id = $_POST['id'];
}
else
    $vw->form = 'nothing';

    

$authors = \App\Models\Author::findAll();
$vw->authors = $authors;

$vw->display(__DIR__ .'/templates/template3.php');