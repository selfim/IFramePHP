<?php
namespace core\libs;
use core\libs\config;
class model extends \medoo
{
    public function __construct()
    {
        //$dsn='mysql:host=localhost;dbname=test';
        //$username = 'root';
        //$passwd = '123456';
        //$db = config::all('database');
        //p($db);exit;
        //try{
        //parent::__construct($db['DSN'],$db['USERNAME'],$db['PASSWORD']);
        //}catch(\PDOException $e){
        //p($e->getMessage());
        //}
        $option = config::all('database');
        parent::__construct($option);
    }
}