<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/31
 * Time: 15:12
 */

namespace app\models;

use yii\db\ActiveRecord;

class Order extends ActiveRecord
{

    //数据验证器
    public function rules()
    {
        return [
            ['id', 'integer'],
            ['cus_id', 'integer', 'length' => [0, 10]],
        ];
    }

    //根据订单查询顾客信息  1-1关系
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(),['id'=>'cus_id'])->asArray();
    }
}