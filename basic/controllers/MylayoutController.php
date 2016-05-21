<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/21
 * Time: 16:03
 */

namespace app\controllers;


use yii\web\Controller;

class MylayoutController extends Controller
{
    //指定 布局文件
    public $layout = "common";

    public function actionIndex()
    {
        return $this->render('about');
    }
}