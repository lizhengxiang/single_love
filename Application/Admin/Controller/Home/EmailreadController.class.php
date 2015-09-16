<?php

namespace Admin\Controller\Home;
use Think\Controller;
class EmailreadController extends Controller {

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
				//获取已读邮件数量
				$think_email = M('report');
				$map['members_id_c'] = $userid;
				$map['state'] = 1;
				$map['tag_a'] = 0;
				$count['count'] = $think_email->where($map)->count();
				$count['email'] = $think_email->where($map)->order('time desc')->select();	
				//获取用户头像照片
				$photo1 = M('photo');
				//根据id取出照片
				for($i = 0; $i < $count['count']; $i++){
					$map['members_id'] = $count['email'][$i]['members_id_a'];
					$count['photo'][$i] = $photo1->where($map)->field('head_ptoto')->find();
				}
				return $count;
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
