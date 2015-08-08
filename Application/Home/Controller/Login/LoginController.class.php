<?php

namespace Home\Controller\Login;
use Think\Controller;
class LoginController extends Controller {

    public function index(){
		//登录页面调用
		//echo T();
		$this->display();
    }
	public function login(){
		//获取网页表单
		$username = trim(I('username'));
		$password = trim(I('password'));
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
				$this->success('登录成功', '/single_love/index.php/Home/Home/Home/index', 0);
			}else{
				$this->error("密码错误");
			}
		}else{
			$this->error('用户名不存在');
		}
	}
}
