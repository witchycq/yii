<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<h1><?=   $hello?></h1>
<h2> <?=   $hello_2[0]?></h2>
<h1><?=$hello_3?></h1>
<!--转义-->
<h1>转义</h1>
<h1><?=Html::encode($hello_3)?></h1>
<!--过滤-->
<h1>过滤</h1>
<h1><?=HTMLPurifier::process($hello_3)?></h1>



