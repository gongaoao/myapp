<?php
namespace app\Admin\controller;
use app\Admin;

class Merchant extends Common
{
    public function index()
    {	
        return $this->view->fetch();
    }
    //编辑商家信息
    public function showMerchant()
    {
    	return $this->view->fetch();
    }
}
