<?php

namespace Home\Controller\Look;
use Think\Controller;
class UnfollowersController extends Controller {

   public function index($user_id){
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
				//关注自己就不需要添加
				if($user_id != cookie('user')){
					//dump($data);  打印出这句话就找到了为什么有bug,因为上面把个人资料取出来放在data里面了,所以data里面有id,所以导致关键字重复
					$think_look = M('followers');
					$dataa['members_id_a'] = cookie('user');
					$dataa['members_id_b'] = $user_id;
					//删除关注记录
					$mapp['members_id_a'] = $dataa['members_id_a'];
					$mapp['members_id_b'] = $dataa['members_id_b'];
					//查看是不是已经在数据库里面有着两个人的资料
					//若有就更新,若没有就添加
						$think_look->where($mapp)->delete();
				}
				$this->redirect('/Home/Look/Look/index');
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
