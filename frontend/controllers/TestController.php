<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10.01.2018
 * Time: 22:30
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;


class TestController extends Controller
{
    public function actionIndex()
    {
        $max = Yii::$app->params['maxNewsInList'];

        $list = Test::getNewsList($max);

        return $this->render('index',[
            'list' => $list,
        ]);
    }
}