<?php

namespace Home\Controller\Login;
use Think\Controller;
class LoginController extends Controller {

    public function index(){
		//登录页面调用
		//echo T();
		$this->display('Personal/Personal/mode/login');
    }
	/*
	public function verify_c(){
		//登录页面调用
		//echo T();
		echo 
		$config = array(
			'useCurve' => false,
			'fontSize' => 20,
			'length' => 4,
			'useNoise' => false,
		);
		$verify = new \Think\Verify();
		$verify -> entry();
    }
	function check_verify($code, $id = ""){  
    	$verify = new \Think\Verify();  
    	return $verify->check($code, $id);  
	}*/
	public function login(){
		//获取网页表单
		$username = trim(I('username'));
		$password = trim(I('password'));
		$verify = trim(I('verify'));
		// 检查验证码  
		//if(!$this->check_verify($verify)){  
    	//	$this->error("亲，验证码输错了哦！");  
		//}
		//判断用户名是不是为空
		if($username == NULL){
			$this->error('用户名为空');
		}
		//判断密码是不是为空
		if($password == NULL){
			$this->error('密码为空');
		}
		//实例化对象模型
		$login = M('registered');
		$map['members_id'] = $username;
		if($login->where($map)->find()){
			$password = md5($password);
			$data = $login->where($map)->find();
			if($data['password'] === $password){
				//session('user', $username);
				cookie('user', $username);
				cookie('password',$password);
				//写入这次的登录时间
				$logintime = M('logintime');
				$data['logintime'] = date('Y-m-d h:i:sa');
				$login_time = $logintime->where($map)->find();
				$data['logintime1'] = $login_time['logintime'];
				$logintime->where($map)->data($data)->save();
				$this->redirect('Home/Home/Home/index');
			}else{
				$this->error("密码错误");
			}
		}else{
			$this->error('用户名不存在');
		}
	}
}
