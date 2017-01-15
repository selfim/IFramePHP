<?php
namespace core\libs\drive\log;
use core\libs\config;
//文件形式存储日志
class file
{
    public $path;//日志存储位置
    public function __construct()
    {
        $config = config::get('OPTION','log');
        $this->path =$config['PATH'];
    }
    //写日志
    public function log($message,$file ='log')
    {
        /**
         *1.确定文件存储位置是否存在 没有就新建
         *2.写入日志
         */
        //p($name);
        if(!is_dir($this->path)){
            mkdir($this->path,0777,true);
        }
        //$message = date('Y-m-d H:i:s').$message;
        $filename = ($this->path).date('YmdH').$file.'.txt';
        $message="###################################\n".date('Y/m/d H:i:s')."\n" . $message . "\n" . "###################################\n\n";
        return file_put_contents($filename,$message, FILE_APPEND);
    }
}