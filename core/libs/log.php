<?php
namespace core\libs;
class log
{
    /**
     *1.ȷ����־�洢��ʽ���ļ������ݿ⣩
     *2.д��־
     */
    static $class;
    public static function init()
    {
        //ȷ���洢��ʽ
        $drive = config::get('DRIVE','log');
        $class = '\core\libs\drive\log\\'.$drive;
        self::$class = new $class;
    }

    public static function log($name)
    {
        self::$class->log($name);
    }
}