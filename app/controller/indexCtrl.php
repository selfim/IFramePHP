<?php
namespace app\controller;
class indexCtrl
{
    public function index() {
        p('it is index');
        $model = new \core\libs\model();
        $sql = "SELECT * FROM msg";
        $res = $model->query($sql);
        p($res->fetchAll());        
    }
}