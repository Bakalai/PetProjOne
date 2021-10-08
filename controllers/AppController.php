<?php


namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller
{
    public $var;
    function __construct($id, $module, $config = [])
    {
        $this->var = 'test';            // $this->context->var;
        parent::__construct($id, $module, $config);

    }

}