<?php

namespace Home\Controller\Email;
use Think\Controller;
class ReademailController extends Controller {
	public function index($userid, $id){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				//获取邮件的发送方,和邮件编号
				$map['members_id_a'] = $userid;
				$map['id'] = $id;
				$map['members_id_b'] = cookie('user');
				//实例化数据对象
				$think_email = M('email');
				$email['state'] = 1;
				$email['time_b'] = date('Y-m-d h:i:sa');
				$think_email->where($map)->field('time_b,state')->data($email)->save();
				$email = $think_email->field('members_id_a,time_a,content')->where($map)->select();
				$this->assign('email', $email);
				$this->display();
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}					
	}
}
