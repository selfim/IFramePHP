<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */
define('ROOT',dirname(realpath(__FILE__)));
define('CORE',ROOT.'/core');
define('APP',ROOT.'/app');
define('MODULE','app');
define('DEBUG',true);
if (DEBUG){
    ini_set('display_errors','On');
}else {
    ini_set('display_errors','Off');
}

require CORE.'/common/functions.php';
require CORE.'/main.php';
spl_autoload_register('\core\main::load');
\core\main::run();