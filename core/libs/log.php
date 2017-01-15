<?php
namespace core\libs;
class log
{
    /**
     *1.确定日志存储格式（文件、数据库）
     *2.写日志
     */
    static $class;
    public static function init()
    {
        //确定存储方式
        $drive = config::get('DRIVE','log');
        $class = '\core\libs\drive\log\\'.$drive;
        self::$class = new $class;
    }

    public static function log($name)
    {
        self::$class->log($name);
    }
}