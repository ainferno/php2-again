<?php
    require __DIR__ . '/autoload.php';
    
    $vw = new \App\View();
    $vw->authors = \App\Models\Author::findAll();
    
    if(isset($_GET['id']))
    {
        $article = \App\Models\News::findById($_GET['id']);
        
        if(isset($_POST['Name']) && !($_POST['Name'] === null) && !($_POST['Name'] === ""))
            $article->Name = $_POST['Name'];
        if(isset($_POST['Title']) && !($_POST['Title'] === null) && !($_POST['Title'] === ""))
            $article->Title = $_POST['Title'];
        if(isset($_POST['Body']) && !($_POST['Body'] === null) && !($_POST['Body'] === ""))
            $article->Body = $_POST['Body'];
        if(isset($_POST['author_id']) && !($_POST['author_id'] === null))
            $article->author_id = $_POST['author_id'];
        $article->save();
    }

    $vw->article = $article;
    
    
    
    //$article = new \App\Models\News();
    //$article->id = 28;
    //$article->Name = 'Insert4';
    //$article->Title = 'Test';
    //$article->Body = 'body';
    //$article->delete();
    //$article->save();
    //var_dump($article);
    
    $vw->display(__DIR__ .'/App/templates/template2.php');
?>