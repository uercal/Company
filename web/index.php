<?php

// [ 支付通知入口文件 ]

// 手动定义路由
//绑定admin模块
define('BIND_MODULE','home/Index');
// 定义运行目录
define('WEB_PATH', __DIR__ . '/');

// 定义应用目录
define('APP_PATH', WEB_PATH . '../source/application/');

// 加载框架引导文件
require APP_PATH . '../thinkphp/start.php';