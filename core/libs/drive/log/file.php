<?php
namespace core\libs\drive\log;
use core\libs\config;
//�ļ���ʽ�洢��־
class file
{
    public $path;//��־�洢λ��
    public function __construct()
    {
        $config = config::get('OPTION','log');
        $this->path =$config['PATH'];
    }
    //д��־
    public function log($message,$file ='log')
    {
        /**
         *1.ȷ���ļ��洢λ���Ƿ���� û�о��½�
         *2.д����־
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