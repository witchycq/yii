<?php
/**
 * Created by PhpStorm.
 * User: witch
 * Date: 2016/6/5
 * Time: 18:50
 */
function my_loader($class)
{
    //require('Class1.php');
    //require('Class2.php');

    require($class.'.php');
}

//延迟加载
spl_autoload_register('my_loader');

$is_girl=$_GET['sex']==0?true:false;

if ($is_girl) {
    echo "is girl";
    $class1 = new Class1;
} else {
    echo "not is girl";
    $class2=new Class2;
}

