<?php


namespace app\controllers;

use app\models\ProductForm;
use yii\web\Controller;

class NewController extends Controller
{
    public function actionFindUser()
    {
       $cats =  ProductForm::find()->all();
    }
}