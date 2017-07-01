<?php
namespace app\Admin\controller;
use think\Controller;
use think\Request;
class Common extends Controller
{
    public function _initialize()
    {
        parent::_initialize();
        /*获取头部信息*/ 
        $header = Request::instance()->header();
        //$sessionId = $header['sessionid'];
        //判断是否登录
        // if(empty($sessionId)){
        // 	$this->redirect('Login/index');
        // }
    }
}

