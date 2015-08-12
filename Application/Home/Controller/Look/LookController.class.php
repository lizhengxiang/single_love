<?php

namespace Home\Controller\Look;
use Think\Controller;
require_once 'SeeController.class.php';
require_once 'NewuserController.class.php';
class LookController extends Controller {

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
				//获取看过我的会员
				$members = new SeeController();
				$user = $members->index();
				$this->assign('count', $user['sum']);
				
				for($i = 0; $i < $user['sum']; $i++){
					//实例化会员信息
					$UserInformation[$i] = new NewuserController();
					//更具会员的id号,取出会员的照片,资料
					$user[$i] = $UserInformation[$i]->index($user['user'][$i]['members_id_a']);
					//保存会员的id号和浏览时间,要在html代码中用
					$user[$i]['id'] = $user['user'][$i]['members_id_a'];
					$user[$i]['time'] = $user['user'][$i]['browse'];
					dump($user[$i]);
					$this->assign('user', $user);
				}
				$this->display();
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
