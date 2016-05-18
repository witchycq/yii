<?php

// comment out the following two lines when deployed to production
//YII_DEBUG：标识应用是否运行在调试模式。当在调试模式下，应用会保留更多日志信息，
//如果抛出异常，会显示详细的错误调用堆栈。
//因此，调试模式主要适合在开发阶段使用，YII_DEBUG 默认值为 false
defined('YII_DEBUG') or define('YII_DEBUG', true);
//YII_ENV：标识应用运行的环境
defined('YII_ENV') or define('YII_ENV', 'dev');

// 注册 Composer 自动加载器
require(__DIR__ . '/../vendor/autoload.php');
// 包含 Yii 类文件
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

// 加载应用配置
$config = require(__DIR__ . '/../config/web.php');

// 创建、配置、运行一个应用
(new yii\web\Application($config))->run();
