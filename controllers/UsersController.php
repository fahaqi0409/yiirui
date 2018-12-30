<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Users;

class UsersController extends Controller{
    public function actionIndex()
    {
        // echo"<h2> HELLO GUYS </h2>";
        $users = Users::find()->all();
        return $this->render('index',['users'=>$users]);
    }
}