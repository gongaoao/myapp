<?php
namespace app\Admin\controller;
use think\Controller;
use think\Request;
use think\Auth;
class Common extends Controller
{   
    protected $memberInfo = [];
    public function _initialize()
    {
        parent::_initialize();
        /*获取头部信息*/ 
        $request = Request::instance();
        $header = $request->header();

        //判断是否登录
        $memberInfo = session('member_info');
        if(empty($memberInfo)){
        	$this->redirect('Login/index');
        }else {
            $this->$memberInfo = $memberInfo;
            $this->assign('memberInfo', $memberInfo);
        }

        //权限控制

        //公共权限
        $public_auth = array('Index/index');

        //当前操作的请求                 模块名/方法名
        $controller = $request->controller();
        $action = $request->action();
        if(in_array($controller.'/'.$action, $public_auth)){
            return true;
        }

        //下面代码动态判断权限
        //$auth = new Auth();
        // if(!$auth->check($controller.'/'.$action,session('aid')) && session('aid') != 1){
        //     $this->error('没有权限');
        // }
        //访问日志记录
    }

}

