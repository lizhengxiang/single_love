<?php

namespace Home\Controller\Home;
use Think\Controller;
class GiftController extends Controller {

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
				//获取上次登录时间
				$think_logintime = M('logintime');
				$logintime = $think_logintime->where($mapa)->find();
				$login_time = $logintime['logintime1'];
				//获取看过我的人数
				$think_sendgift = M('sendgift');
				$map['time'] = array('GT', $login_time);
				$map['members_id_b'] = cookie('user');
				$count = $think_sendgift->where($map)->count();
				return $count;
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
