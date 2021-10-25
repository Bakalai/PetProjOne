<?php

namespace app\controllers;


use app\models\Post;




class MainController extends AppController
{
	public function actionIndex()           //read
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
    public function actionForm(){

	    $this->view->title = "Тест форм";
	    $model = new Post();
	    if ($model->load(\Yii::$app->request->post() && $model->validate())) {
	        \Yii::$app->session->setFlash('success', 'Всё хорошо');
	        return $this->refresh();
        } else {
            \Yii::$app->session->setFlash('danger', 'Не очень хорошо');
        }

	    return $this->render('test/form', compact('model'));


	}
	public function actionCreate(){     //create

        $this->view->title = "Create from CRUD";

        $post = new Post();

        $post->title = 'ssadsasad';
        $post->content = 'ssadsasadssadsasad';
        $post->img = '';
        $post->created_at =  date('Y-m-d H:i:s');
        $post->keywords = 'ssadsasadssadsasad';
        $post->description = 'ssadsasadssadsasad';

        if($post->save()){
            \Yii::$app->session->setFlash('success', 'OK');
        } else {
            \Yii::$app->session->setFlash('error', 'not OK');
        }

        return $this->render('test/create');
    }

}