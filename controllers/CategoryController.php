<?php


namespace app\controllers;


use app\models\Category;

use yii\web\NotFoundHttpException;

class CategoryController extends AppController
{
    public function actionIndex()
    {
        $this->view->title = 'Все категории';
        $categories = Category::find()->all();
        return $this->render('index', compact('categories') );
    }

    public function actionView($id = null, $price = 1000)
    {
        $category = Category::findOne($id);
        $products = $category->getProducts($price)->all();
        if (!$category) {
            throw new NotFoundHttpException('ID not found');
        }  else {

            $this->view->title = "Одна категория: {$category->title}";
        }


        return $this->render('view', compact('category', 'products'));
    }



}