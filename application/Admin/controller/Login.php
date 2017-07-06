<?php
namespace app\Admin\controller;
use think\Controller;
use think\Request;

class Login extends Controller
{
    public function index()
    {	
        return $this->view->fetch();
    }

    public function login()
    {	
    	if (request()->isPost()){
    		//登录数据处理
    		$username = trim(input('post.username'));
    		$password = trim(input('post.password'));
    		$verifycode = trim(input('post.verifycode'));
    		//验证码判断
    		if(empty($verifycode)){
    			$this->error('请输入验证码');
    		}elseif (!captcha_check($verifycode) ) {
    			$this->error('验证码错误');
    		}
    		$member = model('Member');
    		$memberInfo = $member->getMemberInfoByPhone($username)?$member->getMemberInfoByPhone($username):$member->getMemberInfoByEmail($username);
    		if(empty($memberInfo))
    		{
    			$this->error('用户不存在');
    		}else if(md5($password.$memberInfo['salt']) !== $memberInfo['password']){
    			$this->error('密码错误');
    		}else{
                //登录成功，登录信息存入session
                session('member_info',$memberInfo);
                //登录日志记录
                $this->redirect('Index/index');
            }

    	}
    }

    public function logout(){
        session('member_info', null);
        $this->redirect('Login/index');
    }
}
