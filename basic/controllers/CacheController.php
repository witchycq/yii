<?php
/**
 * Created by PhpStorm.
 * User: witch
 * Date: 2016/6/6
 * Time: 21:12
 */

namespace app\controllers;


use yii\web\Controller;

class CacheController extends Controller
{
    public function actionIndex()
    {
        //延迟加载缓存组件
        $cache = \Yii::$app->cache;
        //写缓存
        $cache->add("key1", "hello world!");

        //有的话 则不会再去存储
        $cache->add("key1", "hello world111!");
        //修改缓存
        $cache->set("key1", "hello world2");
        //读缓存
        $data = $cache->get("key1");
        var_dump($data);
        //删除数据
        $cache->delete("key1");
        //读缓存
        $data = $cache->get("key1"); //返回false
        var_dump($data);

        //清空数据 所有数据
        //$cache->flush();

    }

    /*
     * 缓存有效期
     */
    public function actionUsing()
    {
        //延迟加载缓存组件
        $cache = \Yii::$app->cache;

        //$cache->add("key1","hello world!",5);

        echo $cache->get("key1");
    }

    /*
     * 数据缓存中的依赖关系
     */
    public function actionDepend()
    {
        //文件依赖
//        $cache = \Yii::$app->cache;
//        $dependency = new \yii\caching\FileDependency(
//            ['fileName' => "hw.txt"]
//        );
//        $cache->add('file_key', 'hello world', 3000, $dependency);
//        var_dump($cache->get('file_key'));


        //表达式依赖
//        $cache = \Yii::$app->cache;
//        $dependency = new \yii\caching\ExpressionDependency(
//            ['expression' => '\YII::$app->request->get("name")']
//        );
//        $cache->add('expression_key', 'hello world', 3000, $dependency);
//        var_dump($cache->get('expression_key'));

//        DB依赖
        $cache = \Yii::$app->cache;

        $dependency = new \yii\caching\DbDependency(
            ['sql' => 'SELECT count(*) FROM ORDER']
        );
        $cache->add('db_key', 'hello world  db', 3000, $dependency);
        var_dump($cache->get('db_key'));

    }

    /*
     * 片段缓存
     */
    public  function  actionFragment(){

      return   $this->renderPartial('index');

    }

}