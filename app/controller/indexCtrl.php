<?php
namespace app\controller;

class indexCtrl extends \core\main
{
    public function index() {
//         p('it is index');
//         $model = new \core\libs\model();
//         $sql = "SELECT * FROM msg";
//         $res = $model->query($sql);
//         p($res->fetchAll());  
        $tmp = \core\libs\config::get('ACT','route');
        $model = new \core\libs\model();
       
        $data = 'hello';
        $this->assign('data',$data);
        $this->display('index.html');
    }
}