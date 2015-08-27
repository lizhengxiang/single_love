<?php

namespace Home\Controller\Forgot;
use Think\Controller;
require_once'make_password.php';
require_once'sendmail.php';
require_once'members_id.php';

class ForgotController extends Controller {
   public function index(){
		$this->display('Personal/Personal/mode/forgot');
	}
	public function forgot(){
		$map['email'] = trim(I('email'));
		$registered = M('registered');
		//查看邮箱在不在数据库中
		$test = $registered->field('email')->where($map)->find();
		if($map['email'] === $test['email']){
			//获取验证码
			$password_before = make_password(8);
			$data['type'] = $password_before;
			$test = $registered->field('type')->where($map)->save($data);
			$data['email'] = $map['email'];
			$content = "您的密码找回验证码是: ".$password_before;
			sendmail($data['email'], $content);
			$this->redirect('/Home/Forgot/Password/index');
		}else{
			$this->error('该邮箱没有注册或有误,请重新填写邮箱');
		}
	}
}
