<?php

namespace app\controllers;


use app\models\Post;
use app\models\PostForm;


class MainController extends AppController
{
	public function actionIndex()
	{
	    $posts = Post::find()->all();
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'блог разработчика, первый проект, главная страница'], 'description');
		$this->view->title = "Главная страница";
        return $this->render('index', compact('posts'));
	}

	public function  actionAbout() {

        $this->view->registerMetaTag(['name'=>'description', 'content'=>'блог разработчика, первый проект, главная страница'], 'description');
        $this->view->title = "Обо мне";
	    return $this->render('about');

    }
    public function actionTestform(){

	    $this->view->title = "Тест форм";
	    $model = new PostForm();

	    return $this->render('testform', compact('model'));


    }
}