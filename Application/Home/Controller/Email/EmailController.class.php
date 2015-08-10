<?php

namespace Home\Controller\Email;
use Think\Controller;
use Think\Upload;
require_once'NewuserController.class.php';
class EmailController extends Controller {
	public static $members_id_a = 9;
	public function index($user_id){
		$this->$members_id_a = $user_id;
		//获取会员资料
		$nweuser = new NewuserController();
		$user_1 = $nweuser->index($user_id);
		//$user_1['id'] = $user_id;
		$this->assign('data', $user_1);	
		//调用邮件发送
		$this->display();
    }
	public function email(){
		echo I('user_id');
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
	
				//获取相应内容
				$map['members_id'] = cookie('user');
				$data['lnner'] = trim(I('lnner'));
				$data['modify'] = date('Y-m-d h:i:sa');
				$data['state'] = 0;
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}					
	}
}
