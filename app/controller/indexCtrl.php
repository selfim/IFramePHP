<?php
namespace app\controller;

class indexCtrl extends \core\main
{
    //À˘”–¡Ù—‘
    public function index()
    {

        $this->display('index.html');
    }
    
    //ÃÌº”¡Ù—‘
    public function add()
    {
        $this->display('add.html');
    }
    //±£¥Ê¡Ù—‘
    public  function save()
    {
        
    }
}