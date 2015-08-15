<?php
namespace Home\Controller\Gift;
use Think\Controller;
require_once 'UserGiftController.class.php';
require_once 'NewuserController.class.php';

class GetGiftController extends Controller {
	public function index(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				//获取给我发送礼物基本信息
				$usergift = new UserGiftController();
				$gift = $usergift->index();
				$this->assign('gift', $gift);
				//获取给我发送礼物好友的基本信息函数
				$newuser = new NewuserController();;
				//我收到礼物的数量
				$this->assign('count', $gift['sum']);
				//实例化礼物数据库
				$think_gift = M('gift');
				//根据id号去出送我礼物好友的基本信息,和礼物路径
				for($i = 0; $i < $gift['sum']; $i++){
					$user[$i] = $newuser->index($gift['user'][$i]['members_id_a']);
					$map['gift_id'] = $gift['user'][$i]['giftid'];
					$giftroat[$i] = $think_gift->field('road,name')->where($map)->find();
				}
				$this->assign('giftroat', $giftroat);
				$this->assign('user', $user);
				$this->display();
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}	
	}
}

