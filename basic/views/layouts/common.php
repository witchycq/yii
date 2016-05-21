<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="utf-8">
    <title>Document</title>
</header>
<body>
<!--<h1> common </h1>-->
  <?php if(isset($this->blocks['block1'])) :?>
  <?= $this->blocks['block1'];?>
  <?php else:?>
  <h1>hello common</h1>
  <?php endif ;?>

  <?= $content;?>
</body>
</html>
