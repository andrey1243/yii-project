<?php


namespace app\models;
use yii\db\ActiveRecord;

class PostsModel extends ActiveRecord
{
    public static function tableName()
    {
        return 'posts';
    }
}