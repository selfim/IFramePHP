<?php
/**
 * ����ļ�
 * 1.���峣��
 * 2.���غ�����
 * 3.�������
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