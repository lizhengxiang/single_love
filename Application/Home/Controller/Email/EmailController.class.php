<?php

namespace Home\Controller\Email;
use Think\Controller;
use Think\Upload;
require_once'NewuserController.class.php';
class EmailController extends Controller {
	/*
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
    }*/
	public function email(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
			
				//获取相应内容
				$data['members_id_b'] = I('user_id');
				$data['members_id_a'] = cookie('user');
				$data['content'] = trim(I('email'));
				$data['time_a'] = date('Y-m-d H:i:s');
				$data['state'] = 0;
				$think_email = M('email');
				$think_email->field('members_id_a,members_id_b,content,time_a,state')->data($data)->add();
				$this->redirect('/Home/Email/Lookemail/index/abc/3');
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}					
	}
}
