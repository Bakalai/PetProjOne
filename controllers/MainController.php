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
	    if ($model->load(\Yii::$app->request->post() && $model->validate())) {
	        \Yii::$app->session->setFlash('success', 'Всё хорошо');
	        return $this->refresh();
        } else {
            \Yii::$app->session->setFlash('danger', 'Не очень хорошо');
        }

	    return $this->render('testform', compact('model'));


    }
}