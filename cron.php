<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);
//定义常亮标记是否为计划任务脚本
define('APP_CRONTAB', 1);

//判断是否来源于命令执行，其中$argv:包含当运行于命令行下时传递给当前脚本的参数的数组。
if(!$argv || count($argv) < 4) {
    die("parmas_is_error");
}

// 函数返回的是脚本所在在的路径
$dir = dirname(__FILE__);
define('HTML_PATH', $dir.'/');

//将命令脚本的参数赋值给url相应的参数，从而执行该方法
$_GET['m'] = !isset($_GET['m']) ? $argv[1] : 'admin';//模块
$_GET['c'] = !isset($_GET['c'])  ? $argv[2] : 'index';//控制器
$_GET['a'] = !isset($_GET['a']) ? $argv[3] : 'index';//方法

//print_r($_GET);exit;

// 定义应用目录
define('APP_PATH',$dir.'/Application/');

// 引入ThinkPHP入口文件
require $dir.'/ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单