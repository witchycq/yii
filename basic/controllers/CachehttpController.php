<?php
/**
 * Created by PhpStorm.
 * User: witch
 * Date: 2016/6/7
 * Time: 21:06
 */

namespace app\controllers;


use yii\web\Controller;

class CachehttpController extends Controller
{
//    public  function  behaviors()
//    {
//        return[
//            [
//                'class'=>'yii\filters\HttpCache',
//                'lastModified'=>function(){
//                    return 1234567866999;  //时间戳
//                },
//                'etagSeed'=>function(){
//                    return "etagseed22";
//                }
//
//            ]
//        ];
//    }

    /*
     * http 缓存   缓存位置 在浏览器
     *
     * 缓存时机   header中有  Cache-Control:public, max-age=3600
     *
     * 缓存 LM    header Last-Modified:Tue, 06 Aug 2030 13:24:07 GMT
     *
     * 缓存 etag  内容的比对  header   Etag:"IGWR+hzPd2qiyKJd3GZUqA2/n5U"
     */
    public function actionIndex()
    {

        //echo "this is a  page";
        return $this->renderPartial('index');

    }


    /*
     * HTTP  缓存 实例
     */
    public function behaviors()
    {
        return [
            [
                'class' => 'yii\filters\HttpCache',
                'lastModified' => function () {
                    return filemtime('hw.txt');  //时间戳
                },
                'etagSeed' => function () {
                    $fp = fopen('hw.txt', 'r');
                    $title = fgets($fp);
                    fclose($fp);

                    return $title;
                }

            ]
        ];
    }

    public function actionExise()
    {
        $content = file_get_contents('hw.txt');
        return $this->renderPartial('exise', ['new' => $content]);
    }

}