<?php
/**
 * ����ļ�
 * 1.���峣��
 * 2.���غ�����
 * 3.�������
 */
//define('DS', DIRECTORY_SEPARATOR);
//define('ROOT_PATH', __DIR__ . DS);

define('ROOT',dirname(realpath(__FILE__)));
define('CORE',ROOT.'/core');
define('APP',ROOT.'/app');
define('PUBLIC',ROOT.'/public');
define('MODULE','app');
define('DEBUG',true);

require "vendor/autoload.php";
if (DEBUG){
    $whoops = new \Whoops\Run;
    //$errorTitle = "��ܳ�����";
    $option = new \Whoops\Handler\PrettyPageHandler();
    //$option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_errors','On');
}else {
    ini_set('display_errors','Off');
}
//dump($_SERVER);exit;
require CORE.'/common/functions.php';
require CORE.'/main.php';
spl_autoload_register('\core\main::load');
\core\main::run();