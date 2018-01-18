<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Post;


class PostController extends Controller
{

    public function actionIndex()
    {
        $model = Post::find()->all();   //echo "<pre>";print_r($model);echo "</pre>";
        return $this->render('index', ['model' => $model ] );


        //return $this->render('index');
    }


}
