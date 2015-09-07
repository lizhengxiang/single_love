<?php
namespace Home\Controller\Gift;
use Think\Controller;
require_once 'UserGiftController.class.php';
require_once 'NewuserController.class.php';
require_once 'SendGiftController.class.php';

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
				$this->assign('user_id', cookie('user'));
				$this->assign('giftroat', $giftroat);
				$this->assign('user', $user);
		
				//获取我发送礼物基本信息
				$usergift1 = new SendGiftController();
				$gift1 = $usergift1->index();
				$this->assign('gift1', $gift1);
				//dump($gift1);
				//获取我发送礼物好友的基本信息函数
				$newuser1 = new NewuserController();;
				//我发送礼物的数量
				$this->assign('count1', $gift1['sum']);
				//实例化礼物数据库
				$think_gift1 = M('gift');
				//根据id号去出送我礼物好友的基本信息,和礼物路径
				for($i = 0; $i < $gift1['sum']; $i++){
					$user1[$i] = $newuser1->index($gift1['user'][$i]['members_id_b']);
					$map1['gift_id'] = $gift1['user'][$i]['giftid'];
					$giftroat1[$i] = $think_gift1->field('road,name')->where($map1)->find();
				}
				$this->assign('giftroat1', $giftroat1);
				//dump($giftroat1);
				$this->assign('user1', $user1);
				//dump($user1);
				$this->display('Personal/Personal/mode/gift');
				//$this->display();
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}	
	}
}

