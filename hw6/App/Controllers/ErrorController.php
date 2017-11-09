<?php

namespace App\Controllers;

use App\View;

class ErrorController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action,$data)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName($data);
    }

    protected function beforeAction()
    {
    }

    protected function actionIndex(\Exception $ex)
    {
        $this->view->errorCode = $ex->getCode();
        $this->view->error = $ex->getMessage();
        $this->view->display(__DIR__ . '/../templates/templateError.php');
    }
}