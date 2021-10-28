<?php

namespace app\controllers;


use app\models\Post;
use yii\helpers\VarDumper;
use yii\web\NotFoundHttpException;


class MainController extends AppController
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

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
    public function actionForm($alert = ''){

	    $this->view->title = "Тест форм";
	    switch ($alert){
            case 'error':
                \Yii::$app->session->setFlash('error', 'switch error');
                break;
            case 'success':
                \Yii::$app->session->setFlash('success', 'alert success');
                break;
            case 'info':
                \Yii::$app->session->setFlash('info', 'alert info');
                break;
            case 'warning':
                \Yii::$app->session->setFlash('warning', 'alert warning');
                break;
//            default:
//                \Yii::$app->session->setFlash('danger', 'switch danger');
//                break;
        }
        $post = new Post();
        if($post->load(\Yii::$app->request->post())) {

            if($post->save()) {
                \Yii::$app->session->setFlash('success', 'OK');
            } else {
                \Yii::$app->session->setFlash('error', 'хуево OK?');
            }
            return $this->refresh();

        }

	    return $this->render('test/form', compact('post'));


	}
	public function actionCreate(){     //create

        $this->view->title = "Create from CRUD";

        $post = new Post();

        if($post->load(\Yii::$app->request->post()) && $post->save()) {

            \Yii::$app->session->setFlash('success', 'OK');
            return $this->refresh();
        }


        return $this->render('test/create', compact('post'));
    }

    public function actionUpdate()
    {
        $this->view->title = "Update from CRUD";

        $post = Post::findOne('1');
        if (!$post){
            throw new NotFoundHttpException('ID not found');
        }
        if($post->load(\Yii::$app->request->post())) {

            if($post->save()) {
                \Yii::$app->session->setFlash('success', 'Шалость удалась');
            } else {
                \Yii::$app->session->setFlash('error', 'хуево OK?');
            }
            return $this->refresh();

        }

        return $this->render('test/update', compact('post'));
    }

    public function actionDelete($id=''){
        $this->view->title = "Delete from CRUD";

        $post = Post::findOne($id);
        if ($post){
            if (false !== $post->delete())
            {
                \Yii::$app->session->setFlash('success', 'Успешно удалили');
            } else {
                \Yii::$app->session->setFlash('error', 'хуево OK?');
            }

        } else {
            \Yii::$app->session->setFlash('success', $id.' не найден, либо пуст');
            //throw new NotFoundHttpException('ID not found');
        }


        return $this->render('test/delete', compact('post'));
    }
}