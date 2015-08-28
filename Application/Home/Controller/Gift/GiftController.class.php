<?php
namespace Home\Controller\Gift;
use Think\Controller;
require_once 'NewuserController.class.php';

class GiftController extends Controller {
   public function index($userid){
		//echo $map;
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
				$this->assign('data', $data);
				
				//获取所有礼物
				$gift_a =  M('gift');
				$gift = $gift_a->field('gift_id, road')->select();
				$count = $gift_a->count();
				$this->assign('count', $count);
				$this->assign(gift, $gift);
				
				$this->display();
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
	public function gift($userid){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{

				//获取发过来的礼物id和留言
				$dataa['giftid'] = I('gift');
				$dataa['content'] = I('message');
				//选择了礼物才会发送,否则不发送礼物
				if($dataa['giftid']){
					$sendgift = M('sendgift');
					$dataa['members_id_a'] = cookie('user');
					$dataa['members_id_b'] = $userid;
					$dataa['time'] = date('Y-m-d H:i:s');
					$dataa['state'] = 0;
					$dataa['way'] = I('way');
					$sendgift->data($dataa)->add();
					$this->redirect('/Home/Gift/GetGift/index');
					//$this->display('Personal/Personal/mode/gift');
				}
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}		
	}
}
