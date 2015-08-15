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
				dump($gift = $usergift->index());
				$this->assign('gift', $gift);
				//获取给我发送礼物好友的基本信息函数
				$newuser = new NewuserController();;
				
				//实例化礼物数据库
				$think_gift = M('gift');
				//根据id号去出送我礼物好友的基本信息,和礼物路径

				for($i = 0; $i < $gift['sum']; $i++){
					$user[$i] = $newuser->index($gift['user'][$i]['members_id_a']);
					$giftroat[$i] = $think_gift->where($gift['user'][$i]['giftid'])->field('road')->find();
				}
				dump($giftroat);
				dump($user);
				$this->assign('user', $user);
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}	
	}
}

