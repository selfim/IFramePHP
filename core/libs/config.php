<?php
namespace core\libs;
class config
{
    public static $config = array();
    public static function get($name,$file)
    {
        /**
         * 1.判断配置文件是否存在
         * 2.判断配置是否存在
         * 3.缓存配置
         */
        if(isset(self::$config[$file])){
            return self::$config[$file][$name];
        }else{
            $path = ROOT.'/core/configs/'.$file.'.php';
            if(is_file($path)){
             
                $config = require  $path;
                //p($config);exit;
                if(isset($config[$name])){
                    self::$config[$file]=$config;

                    return self::$config[$file][$name];
                }else{
                    throw new \Exception("没有这个配置项".$name);
                }
            }else{
                throw new \Exception("找不到配置文件".$file);
            }
        }
        	

    }

    public static function all($file)
    {
        if(isset(self::$config[$file])){
            return self::$config[$file];
        }else{
            //p(1);
            $path = ROOT.'/core/configs/'.$file.'.php';
            if(is_file($path)){
                //$path =include $file;
                $config = require $path;
                //p($config);exit;
                self::$config[$file]=$config;
                return $config;
            }else{
                throw new \Exception("找不到配置文件".$file);
            }
        }
    }
}