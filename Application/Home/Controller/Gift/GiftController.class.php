<?php
namespace Home\Controller\Gift;
use Think\Controller;
require_once 'NewuserController.class.php';
class GiftController extends Controller {
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
				//实例化user对象
				$user = new NewuserController();
				$data = $user->index($userid);	
				dump($data);
				$this->assign('data', $data);
				
				//获取所有礼物
				$gift_a =  M('gift');
				$gift = $gift_a->field('gift_id, road')->select();
				echo $count = $gift_a->count();
				dump($gift);
				$this->assign('count', $count);
				$this->assign(gift, $gift);
				
				$this->display();
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
	public function gift($userid){
		//
		echo $gift = I('gift');
		echo $message = I('message');
		if($gift){
			echo  "bchsbcsd";
		}
	}
}
