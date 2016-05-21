<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/21
 * Time: 14:44
 */

namespace app\controllers;

use yii;
use yii\web\Controller;
use yii\web\Cookie;

class CookieController extends Controller
{
    //cookie 操作
    public  function actionCookie(){
       //读取cookie
        $rcookies=yii::$app->request->cookies;
       // 获取名为 "language" cookie 的值，如果不存在，返回默认值"en"
        $lan=$rcookies->getValue('lan','en');
        echo  $lan;

        //发送cookie
        $cookies= Yii::$app->response->cookies;

        $cookies_data=array('name'=>'user','value'=>'lse');
        $cookies->add(new Cookie($cookies_data));
        //删除cookie
        //$cookies->remove('user');
    }
}