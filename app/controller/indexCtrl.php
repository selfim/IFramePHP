<?php
namespace app\controller;

class indexCtrl extends \core\main
{
    //��������
    public function index()
    {

        $this->display('index.html');
    }
    
    //�������
    public function add()
    {
        $this->display('add.html');
    }
    //��������
    public  function save()
    {
        
    }
}