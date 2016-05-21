<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/21
 * Time: 15:37
 */

namespace app\controllers;
use yii;
use yii\base\Controller;

class ViewController extends Controller
{
     public  function actionIndex(){
       $datas=array();

       $datas['hello']="hello world yii!";
       $datas['hello_2']=array(1,2);
       $datas['hello_3']="hello yii <script>alert(3);</script>";
       return  $this->renderPartial('index',$datas);
     }
}