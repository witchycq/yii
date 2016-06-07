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
//if ($this->beginCache('cache_div',['duration'=>$duration])) {
//if ($this->beginCache('cache_div',['dependency'=>$dependency])) {
if ($this->beginCache('cache_outer_div',['duration'=>20])) {
    ?>
    <div id="cache_outer_div">
        <div>这里是外层</div>
    </div>

    <?php
    if ($this->beginCache('cache_inner_div',['duration'=>1])) {
        ?>
        <div id="cache_inner_div">
            <div>这里是内层</div>
        </div>

        <?php
        $this->endCache();
    }
    ?>


    <?php
    $this->endCache();
}
?>



