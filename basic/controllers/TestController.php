<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/31
 * Time: 15:12
 */

namespace app\controllers;

use app\models\Test;
use app\models\Customer;
use app\models\Order;
use yii\web\Controller;

class TestController extends Controller
{

    //查询 数据库
    public function actionIndex()
    {
        //问题 sql  （sql 注入）
        //$id='1 or 1=1';
        //$sql='select * from test where id='.$id;
        //$resutl= Test::findBySql($sql)->all();
        //解决方案  占位符 (过滤sql )
        //$sql='select * from test where id=:id';
        //$resutl= Test::findBySql($sql,array(':id'=>'1 or 1=1'))->all();
        //优化 改为数组 是代码更整洁

        //id=1
        // $result=Test::find()->where(['id'=>1])->all();

        //id>0
        //$result= Test::find()->where(['>','id',0])->all();

        //id>=1并且  id<=2
        //$result= Test::find()->where(['between','id',1,2])->all();

        //title like "%title%"   like   字段  值
        // $result= Test::find()->where(['like','title','title'])->all();


        //title like "%title%"   like   字段  值   装转化为 数组  内存占用小
        $result = Test::find()->where(['like', 'title', 'title'])->asArray()->all();

        //批量查询   内容 占用小
        foreach (Test::find()->batch(2) as $tests) {
            var_dump(count($tests));
        }
        //var_dump($result);
    }

    //删除数据
    public function actionDelete()
    {

        //$result=Test::find()->where(['id'=>1])->all();
        //$result[0]->delete();

        Test::deleteAll('id>:id', array(':id' => 0));
    }


    //增加数据
    public function actionAdd()
    {
        $test = new Test;
        //$test->id=3  自增
        $test->title = "title4";
        $test->validate();
        if ($test->hasErrors()) {
            echo 'data is error';
            die;
        }
        $test->save();
    }


    public function actionUpdate()
    {
        $test = Test::find()->where(['id' => 4])->one();
        $test->title = "title555";
        $test->save();
    }

    //关联查询
    public function actionQuery()
    {

        //根据顾客名字查询 订单
        //$customer = Customer::find()->where(['name' => '张三'])->one();
        //封装代码
        //$order=$customer->hasMany(Order::className(),['cus_id'=>'id'])->asArray()->all();
        //$order= $customer->getOrder();

        //以属性 形式获取 数据
        //$order=$customer->order;
        //var_dump($order);

        //根据订单查询 顾客信息
        $order = Order::find()->where(['id' => 1])->one();
        //以属性方式访问
        $customer = $order->customer;
        var_dump($customer);
    }

    //  关联查询缓存
    public  function  actionQuerycache(){
//        $customer=Customer::find()->where(['name'=>'张三'])->one();
//        //数据已经缓存到了 $order
//        $order=$customer->order;//select * from order where cus_id=...;
//        //释放缓存数据
//        unset($customer->order);
//        //可以查看修改的数据
//        $order2=$customer->order;//select * from order where cus_id=...;
//        var_dump($order);

        //关联查询的多次查询
        //$customers=Customer::find()->all(); //select * from customer
//        $customers=Customer::find()->with('order')->all(); //select * from customer where cus_id in(...)
//        foreach($customer as $customer){
//                  //$order=$customer->order;   //select * from order cus_id=....
//            $order=$customer->order;   //select * from order cus_id=....
//        }
    }

}