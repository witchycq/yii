<?php
/**
 * Created by PhpStorm.
 * User: witch
 * Date: 2016/6/5
 * Time: 18:41
 */

namespace app\controllers;

use app\models\Order;


use yii\web\Controller;

class ClassmapController extends Controller
{
  public  function actionIndex(){

      \YII::$classMap['app\models\Order']='E:\phpStudy\WWW\yii\basic\models\Order.php';

       $order=new Order();

      echo "init  done";
  }
}