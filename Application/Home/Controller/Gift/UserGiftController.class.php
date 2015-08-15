<?php

namespace Home\Controller\Gift;
use Think\Controller;
class UserGiftController extends Controller{

   public function index(){
		//echo $map;
		//获取用户帐号
		$mapa['members_id'] = cookie('user');

		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				//获取受到礼物的基本信息
				$think_sendgift = M('sendgift');
				$map['members_id_b'] = cookie('user');
				$user['user'] = $think_sendgift->where($map)->order('time desc')->select();
				$user['sum'] = $think_sendgift->where($map)->count();
				return $user;
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
?>
