<?php
namespace app\model;

use core\libs\model;
class msgModel extends model
{
    public $table = 'msg';
    //查询所有
    public function lists()
    {
        return $this->select($this->table, '*');
    }
    //查询一条
    public function getOne($id)
    {
        return $this->get($this->table,'*',array(
            'id'=>$id
        ));
    }
    //更新一条
    public function uOne($id,$data)
    {
        return $this->update($this->table, $data,array(
            'id'=>$id
        ));
    }
    //删除一条
    public function delOne($id)
    {
        return $this->delete($this->table, array(
            'id'=>$id
        ));
    }
    
}