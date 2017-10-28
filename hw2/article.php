<?php
    require __DIR__ . '/autoload.php';
    
    if(isset($_GET['id']))
        $article = \App\Models\News::findById($_GET['id']);
        
    if(isset($_GET['id']) && isset($_POST['behaviour']) && ($_POST['behaviour'] == 'update') && isset($_POST['Name']) && !($_POST['Name'] === null) && isset($_POST['Title']) && !($_POST['Title'] === null))
    {
        $article[0]->Name = $_POST['Name'];
        $article[0]->Title = $_POST['Title'];
        $article[0]->Body = $_POST['Body'];
        $article[0]->save();
    }    
    
    //$article = new \App\Models\News();
    //$article->id = 28;
    //$article->Name = 'Insert4';
    //$article->Title = 'Test';
    //$article->Body = 'body';
    //$article->delete();
    //$article->save();
    //var_dump($article);

    include __DIR__ .'/template2.php';
?>