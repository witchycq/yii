<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/17
 * Time: 17:35
 */

namespace app\models;
use  yii\base\Model;


class EntryForm extends Model
{
    public $name;
    public  $email;
    public  function  rules(){
        return[
            [['name','email'],'required'],
            ['email','email'],
        ];
    }


}