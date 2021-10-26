<?php


namespace app\controllers;


use app\models\Product;
use yii\web\NotFoundHttpException;

class ProductController extends AppController
{

    public function actionIndex()
    {
        $this->view->title = 'Продукты и их категории';
        $products = Product::find()->all();


       return $this->render('index', compact('products'));
    }

    public function actionView($id=null)
    {
        $product = Product::findOne($id);

        if (!$product) {
            throw new NotFoundHttpException('ID not found');
        }  else {

            $this->view->title = "Однин товар: {$product->title}";
        }

        return $this->render('view', compact('product'));
    }


}