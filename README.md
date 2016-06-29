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
<pre>
 安全篇


1.xss（跨站脚本攻击）
  --获取cookie
  --盗号  httponly
  --非法转账
     --填写信息脚本
     --注入到页面
  --反射型XSS攻击
  --chrom 浏览器 xss 过滤
  --xss worm  xss 蠕虫


  YII 防范 XSS
   --实体编码  encode  htmlspacichars
   --过滤（lexer）      htmlpurifier::process


  csrf （跨站请求伪造）
  防范
   -- 验证码 用户体验
   -- referer  发起请求的地址  （有些请求不会带头）
   -- 防伪标识（相对有效） 随机的  wordpress用的这种方法

  YII 方法措施
  --表单隐藏域  name=_csrf   标识
  --cookie保存一份 并且加密


  sql 注入
  yii 框架使用  PDO


  文件上传漏洞
  --


总结  ::
xss攻击

    存储型攻击

    发射型攻击

      转义

      lexer解析 过滤


      csrf 攻击

       get  post

       隐藏随机数

       SQL 注入

       攻击方式

        PDO  占位符

        文件上传
        绕过类型检查


</pre>