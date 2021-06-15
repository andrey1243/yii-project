<?php


namespace app\controllers;

use app\models\PostsModel;
use yii\web\Controller;

class BlogController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPosts()
    {
        $data['posts'] = PostsModel::find()->asArray()->all();

        return $this->render('posts',compact('data'));
    }
    public function actionPost()
    {
        return $this->render('post');
    }
}