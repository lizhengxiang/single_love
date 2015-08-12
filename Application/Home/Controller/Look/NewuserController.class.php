<?php

namespace Home\Controller\Look;
use Think\Controller;
class NewuserController extends Controller {

   public function index($userid){
		//echo $map;
		//获取用户帐号
		$map['members_id'] = $userid;

		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				//获取用户头像及照片
				$photo1 = M('photo');
				//根据id取出照片
				$photo = $photo1->where($map)->find();
				$user['head_photo'] = $photo['head_ptoto'];

				//取出用户基本资料
				$data1 = M('data');
				$data = $data1->where($map)->find();
				//计算年龄
				$user['age'] = date("Y-m-d") - $data['birth'];
				$user['height'] = $data['height'];	
				$user['home'] = $data['home']; 	
				$user['nickname'] = $data['nickname'];
				//取出工作学习
				$think_unit = M('unit');
				$unit = $think_unit->where($map)->find();
				$user['professional'] = $unit['professional'];
				return $user;
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
