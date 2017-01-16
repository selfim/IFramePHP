<?php
/**
 * 框架核心入口文件
 */
namespace core;

class main
{
    public static $class_map = array();
    public $assign;
    public static function run()
    {
        \core\libs\log::init();
        #\core\libs\log::log('test');
        $route = new \core\libs\route();
        //p($route);
        $ctlClass =$route->controller;
        $act = $route->action;
        $ctlFile = APP.'/controller/'.$ctlClass.'Ctrl.php';
        //p($ctlFile);exit;
        $cltlClass = '\\'.MODULE.'\controller\\'.$ctlClass.'Ctrl';
        if(is_file($ctlFile)){
            require  $ctlFile;
            $ctl = new $cltlClass();
            $ctl->$act();
            \core\libs\log::log('controller:'.$ctlClass.'   '.'action:'.$act);
        }else{
            throw new \Exception('找不到控制器'.$ctlClass);
        }
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
    
    public  function assign($name,$value)
    {
    
        $this->assign[$name] = $value;
    }
    
    public function display($file)
    {
        /**
        $file = APP.'/views/'.$file;
        if(is_file($file)){
            //p($this->assign);exit;
            extract($this->assign);
            require $file;
        }
        */
        $file = APP.'/views/'.$file;
        if(is_file($file)){
            //p($this->assign);exit;
            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem('APP./views/');
            $twig = new \Twig_Environment($loader, array(
                'cache' => ROOT.'/log/twig',
                'debug'=>DEBUG
            ));
            $template = $twig->loadTemplate('index.html');
            $template->display($this->assign?$this->assign:array());
        }
        
    
    }
}