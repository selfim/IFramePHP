<?php
namespace core\libs;
use core\libs\config;
class route
{
    public $controller;
    public $action;
    public function __construct()
    {
       if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI']!= '/')
       {  
             //取得控制器和方法
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/',trim($path,'/'));
            if(isset($patharr[0])){
				$this->controller = $patharr[0];
			}
			unset($patharr[0]);
			if(isset($patharr[1])){
				$this->action = $patharr[1];
				unset($patharr[1]);
			}else{
				$this->action = config::get('ACT','route');
				
			}
          $count = count($patharr) +2;
          $i = 2;
          while($i<$count){
              if(isset($patharr[$i +1])){
                  $_GET[$patharr[$i]] = $patharr[$i +1];
              }
              $i = $i+2;
          }
          //p($_GET);
       }else{
			$this->controller = config::get('CTL','route');
			$this->action = config::get('ACT','route');
		 }
       
    }
}