<?php
/**
 * Created by PhpStorm.
 * User: witch
 * Date: 2016/6/12
 * Time: 21:48
 */

namespace app\controllers;

use yii\web\Controller;

class UploadController extends Controller
{
    //当前控制器 禁用掉 scrf 检测
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

    public function actionUpfile()
    {
        if ($_POST) {
            $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
//            var_dump($ext);
            if (in_array($ext, ['png', 'jpg', 'gif'])) {
//                var_dump($_FILES);
              $res=  move_uploaded_file($_FILES['photo']['tmp_name'], './' . $_FILES['photo']['name']);

            }
        }
    }
}