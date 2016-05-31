<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/31
 * Time: 15:12
 */

namespace app\models;

use yii\db\ActiveRecord;

class Customer extends ActiveRecord
{

    //数据验证器
    public  function  rules(){
        return[
            ['id','integer'],
            ['name','string','length'=>[0,20]],
        ];
    }

    //帮助顾客获取订单信息   1- N  关系
    public function  getOrder(){
       //$order=$this->hasMany(Order::className(),['cus_id'=>'id'])->asArray()->all();
        $order=$this->hasMany(Order::className(),['cus_id'=>'id'])->asArray();
        return $order;
    }


}