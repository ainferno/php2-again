<?php

namespace App\Controllers;

use App\View;

class AdminController
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

    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\News::findById($id);
        $this->view->authors = \App\Models\Author::findAll();
        $this->view->display(__DIR__ . '/../templates/template2.php');
    }

}