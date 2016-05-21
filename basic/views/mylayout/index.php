
<h1>hello  index</h1>

<?php  echo $this->render('about',array('hello'=>'hello yii 从视图渲染的视图传值!'));?>

<?php $this->beginBlock('block1')?>
<!--<h1>index</h1>-->
<?php $this->endBlock();?>
