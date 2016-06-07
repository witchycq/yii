# yii
cake

<p style="font-size:30px;">
<pre>
yii     framework  learn

CookieController.php
  cookie 的使用
CountryController.php
 数据库的使用
MylayoutController.php
布局的使用
SessionController.php
  session 的使用
SiteController.php
   默认的 控制器 管理
TestController.php
 DB 的使用
    增删改查
    关联查询
      --属性查询
    关联查询缓存
      --unset 变量  清楚缓存 便于修改后的查询
    关联查询的多次查询
      --使用 width 关键字  减少 sql 的查询 提高性能  转为 in() 查询
ViewController.php
   视图渲染 使用



总结:

框架安装

请求处理
  应用主体  加载各种文件 配置文件

控制器
  调用各种组件 cookie session 等等

视图
  控制器处理结果 丢给 视图 （视图重复 使用布局文件）

数据模型  （活动记录）
（数据验证  以及 数据库 增删改查 ）

(MVC  模式  组成)
</pre>

</p>

<pre>
  yii  高效篇

类的延迟加载
  --lazy_loading

类的映射
  --ClassmapController.php

组件的延迟加载
  --SessionController.php  /actionSessionlazy

缓存
 --配置
web.php
       'cache' => [
            'class' => 'yii\caching\FileCache',


片段缓存
CacheController.php
 --actionFragment
 嵌套缓存
 CacheController.php
 --actionQiantao
页面缓存
CacheController.php
  --actionPage
HTTP 缓存
CachehttpController


gii 代码生成器


总结
  延迟加载
  多级缓存
    --
  gii 代码生成器


</pre>
