<?php

namespace Home\Controller\Home;
use Think\Controller;
class LookController extends Controller {

   public function index(){
		//echo $map;
		//获取用户帐号
		$map['members_id_a'] = cookie('user');

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
				$logintime = $think_logintime->where($map)->find();
				$login_time = $lointime['logintime1'];
				//获取看过我的人数
				$think_look = M('look');
				$map['browse'] = array('GT', '$login_time');
				$count = $think_look->where($map)->count();
				return $count;
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
