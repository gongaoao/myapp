<?php
namespace app\Admin\controller;
use think\Controller;

class Login extends Controller
{
    public function index()
    {	
        //return "Login";
        return $this->view->fetch();
    }
}
