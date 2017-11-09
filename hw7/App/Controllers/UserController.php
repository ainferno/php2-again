<?php

namespace App\Controllers;

use App\View;

class UserController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }

    protected function beforeAction()
    {
    }

    protected function actionIndex()
    {
        //$this->view->title = 'Мой крутой сайт!';
        $this->view->news = \App\Models\News::findAll();
        $this->view->authors = \App\Models\Author::findAll();
        $this->view->display(__DIR__ . '/../templates/template.php');
    }
    
    protected function actionDelete()
    {
        if(!isset($_POST['id']))
        {
            echo 'ERROR #2<br>';
            $this->actionIndex();
            return;
        }
        $art = \App\Models\News::findById($_POST['id']);
        if($art == null)
            return;
        $art->delete();
        $this->actionIndex();
    }
    
    protected function actionAppend()
    {
        //var_dump($_POST);
        $art = \App\Models\News::self_create($_POST);
        if(!($art == null))
            $art->save();
        $this->actionIndex();
    }
    protected function actionUpdate()
    {
        if(!isset($_POST['id']))
        {
            echo 'ERROR #3<br>';
            $this->actionIndex();
            return;
        }
        $art = \App\Models\News::findById($_GET['id']);
        $art->self_update($_POST);
        $art->save();
        //var_dump($art);
        $this->actionOne();
    }

    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\News::findById($id);
        $this->view->authors = \App\Models\Author::findAll();
        $this->view->display(__DIR__ . '/../templates/template2.php');
    }

}