<?php
namespace app\common\model;
use think\Db;
use think\Model;
class Member extends Model{
	//用户登录
	public function login($username='', $password='', $type='phone')
	{
		$res = $this->where(array('mobile_phone'=>1))->find();
		return $res;
	}
	//通过手机号查找用户信息
	public function getMemberInfoByPhone($phone)
	{
		$res = $this->where(array('mobile_phone'=>$phone))
					->find();
		return $res;
	}
	//通过邮箱查找用户信息
	public function getMemberInfoByEmail($email)
	{
		$res = $this->where(array('mobile_phone'=>$email))
					->find();
		return $res;
	}
}