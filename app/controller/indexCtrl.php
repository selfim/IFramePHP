<?php
namespace app\controller;
use core\libs\model;
class indexCtrl extends \core\main
{
    public function index() {
//         p('it is index');
//         $model = new \core\libs\model();
//         $sql = "SELECT * FROM msg";
//         $res = $model->query($sql);
//         p($res->fetchAll());  
        $tmp = \core\libs\config::get('ACT','route');
        //$model = new \core\libs\model();
//        $model = new model();
//        //dump($model);
//        $res = $model->select('msg', '*');
//        $data = array(
//            'email'=>'abc@qq.com',
//            'username'=>'abc',
//            'content'=>'dhsahdsakdjsakdjasl'
//        );
//        $ids = $model->insert('msg', $data);
//        dump($ids);
        /**
        $model = new \app\model\msgModel();
        //$res = $model->getOne(6);
        $data = array(
                    'email'=>'abc@qq.com',
                    'username'=>'abc',
                   'content'=>'dhsahdsakdjsakdjasl'
                );
        $res = $model->uOne(2,$data);
        dump($res);
        */
        $data = 'hello';
        $this->assign('data',$data);
        $this->display('index.html');
    }
}