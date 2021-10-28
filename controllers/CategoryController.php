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

    public function actionView($alias = null, $price = 1000)
    {
        $category = Category::findOne(['alias' => $alias]);

        if (!$category) {
            throw new NotFoundHttpException('Категория '. $alias . ' not found');
        }  else {
            $products = $category->getProducts($price)->all();
            $this->view->title = "Одна категория: {$category->title}";
        }


        return $this->render('view', compact('category', 'products'));
    }



}