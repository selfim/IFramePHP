<?php
namespace app\model;

use core\libs\model;
class msgModel extends model
{
    public $table = 'msg';
    //��ѯ����
    public function lists()
    {
        return $this->select($this->table, '*');
    }
    //��ѯһ��
    public function getOne($id)
    {
        return $this->get($this->table,'*',array(
            'id'=>$id
        ));
    }
    //����һ��
    public function uOne($id,$data)
    {
        return $this->update($this->table, $data,array(
            'id'=>$id
        ));
    }
    //ɾ��һ��
    public function delOne($id)
    {
        return $this->delete($this->table, array(
            'id'=>$id
        ));
    }
    
}