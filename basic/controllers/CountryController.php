<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/17
 * Time: 18:43
 */

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller
{

    public  function  actionindex(){
        $query=Country::find();
        $pagination=new Pagination([
                'defaultpageSize'=>5,
                'totalCount'=>$query->count(),
        ]);

        $countries=$query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',[
            'countries'=>$countries,
            'pagination'=>$pagination,
        ]);
    }

}