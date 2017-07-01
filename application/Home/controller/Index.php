<?php
namespace app\Home\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {	
    	//\think\Config::load(CONF_PATH.'config.php');
    	//dump(\think\Config::get());
    	//dump(\think\Config::get('database'));
    	//$this->error('新增失败');
        return ("Home");
    }
}
