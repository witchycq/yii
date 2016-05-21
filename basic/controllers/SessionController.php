<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/21
 * Time: 15:13
 */

namespace app\controllers;

use yii;
use yii\base\Controller;
use yii\web\Session;

class SessionController extends Controller
{
    public function actionIndex()
    {
        $session = yii::$app->session;
        // 检查session是否开启
        if ($session->isActive) {

        }
        // 开启session
        $session->open();

        // 关闭session
        //$session->close();

        //销毁session中所有已注册的数据
        //$session->destroy();

        // 设置一个session变量，以下用法是相同的：
        //保存路径是 php.ini 中配置 session.save_path
        $session->set('lan', 'en-US');

      // 获取session中的变量值，以下用法是相同的：
        $lan=$session->get('lan');
        echo $lan;

      // 检查session变量是否已存在，以下用法是相同的
        if ($session->has('lan')){
            echo "has lan";
        }
        $session->remove('lan');

        //当成数据组处理
        $session['lan']="zh";
        echo $session['lan'];
        unset($session['lan']);


        // 遍历所有session变量，以下用法是相同的：
        foreach($session as $name=>$value){
           // echo $name.$value;
        }

    }
}