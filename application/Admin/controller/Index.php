<?php
namespace app\Admin\controller;
use app\Admin;

class Index extends Common
{
    public function index()
    {	
        return $this->view->fetch();
    }
}
