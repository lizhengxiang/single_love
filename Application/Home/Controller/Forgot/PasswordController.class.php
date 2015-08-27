<?php

namespace Home\Controller\Forgot;
use Think\Controller;

class PasswordController extends Controller {
   public function index(){
		$this->display('Personal/Personal/mode/password');
	}
	public function forgot(){
		$map['email'] = trim(I('email'));
		$map['type'] = trim(I('verif'));
		$pass_1 = trim(I('pass_1'));
		$pass_2 = trim(I('pass_2'));

		$registered = M('registered');
		//查看邮箱在不在数据库中
		$test = $registered->where($map)->find();
		if($map['email'] != $test['email']){
			$this->error('邮箱不正确或验证码不正确,请重新输入邮箱');
		}

		if(!$pass_1){
			$this->error('密码不能为空');
		}
	   if($pass_1 != $pass_2){
 			$this->error('两次输入的密码不一样,请重新输入密码');
 		}

		if($map['type'] === $test['type']){
			//对密码加密
			$data['password'] = md5($pass_1);
			$test = $registered->field('password')->where($map)->save($data);
			$this->redirect('Home/Login/Login/index');
		}else{
			$this->error('验证码错误');
		}
	}
}
