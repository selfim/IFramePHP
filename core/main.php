<?php
/**
 * 框架核心入口文件
 */
namespace core;

class main
{
    public static $class_map = array();
    public static function run()
    {
        $route = new \core\libs\route();
        p($route);
    }
    public static function load($class)
    {
        if(isset($class_map[$class])){
			return true;
		}else{
			$class = str_replace('\\','/',$class);
			$file = ROOT.'/'.$class.'.php';
			if(is_file($file)){
				require  $file;
				self::$class_map[$class] = $class;
			}else{
				return false;
			}
		}
        
    }
}