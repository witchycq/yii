

<?php

//缓存时间
//$duration =15;


//缓存依赖
//$dependency=[
//  'class'=>'yii\caching\FileDependency',
//    'fileName'=>'hw.txt'
//];


//缓存的开关
$enabled=true;
?>
<?php
/**
 * Created by PhpStorm.
 * User: witch
 * Date: 2016/6/6
 * Time: 21:43
 */
//if ($this->beginCache('cache_div',['duration'=>$duration])) {
//if ($this->beginCache('cache_div',['dependency'=>$dependency])) {
if ($this->beginCache('cache_div',['enabled'=>$enabled])) {

    ?>
    <div id="cache_div">
        <div>这里会被缓存112211</div>
    </div>

<?php
    $this->endCache();
}
?>

<div id="no_cache_div">
    <div>这里不会被缓存222 </div>
</div>


