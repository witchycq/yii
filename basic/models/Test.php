<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/31
 * Time: 15:12
 */
namespace app\models;

use yii\db\ActiveRecord;

class Test extends ActiveRecord
{
    //数据验证器
    public  function  rules(){
        return[
            ['id','integer'],
            ['title','string','length'=>[0,10]],
        ];
    }
}