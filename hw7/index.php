<?php
    require_once __DIR__ .'/vendor/autoload.php';

    // Create the Transport
    /*$transport = (new Swift_SmtpTransport('smtp.yandex.ru', 465 , 'SSL'))
      ->setUsername('Vasily.nichiporenko')
      ->setPassword('Pihcin#1')
    ;

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message('Wonderful Subject'))
      ->setFrom(['vasily.nichiporenko@ya.ru' => 'Dev'])
      ->setTo(['vasily.nichiporenko@ya.ru', 'vasily.nichiporenko@ya.ru' => 'A name'])
      ->setBody('Here is the message itself')
      ;

    // Send the message
    $result = $mailer->send($message);
    */

    $test = \App\Models\News::generateAll();
    foreach($test as $sbj) {
        var_dump($sbj);
    }


    /*try {
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
    } catch (\Exception $ex) {
        date_default_timezone_set('Europe/Moscow');
           
        if (!file_exists(__DIR__ .'/../../Logs/'.date('Y'))) {
            mkdir(__DIR__ .'/../../Logs/'.date('Y'), 0777, true);
        }
        if (!file_exists(__DIR__ .'/../../Logs/'.date('Y').'/'.date('M'))) {
            mkdir(__DIR__ .'/../../Logs/'.date('Y').'/'.date('M'), 0777, true);
        }
        echo __DIR__ .'/'.date('h:i').'.txt';
        $f = fopen(__DIR__ .'/../../Logs/'.date('Y').'/'.date('M').'/'.date('h').'.txt','a');
        fwrite($f,date('i:s').": Error #".$ex->getCode().PHP_EOL);
        fwrite($f,$ex->getMessage().PHP_EOL .'##########'. PHP_EOL);
        fclose($f);
    }


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