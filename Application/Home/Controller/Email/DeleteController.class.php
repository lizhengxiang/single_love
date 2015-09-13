<?php
namespace Home\Controller\Email;
use Think\Controller;

class DeleteController extends Controller {
   public function index(){

		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				//根据邮件id和自己的id刪除已發送郵件
				$map['id'] = I('emailid');
				$map['members_id_a'] = cookie('user');						
				$data['tag_b'] = 1;
				$aboutid = M('email');
				$aboutid->field('tag_b')->where($map)->save($data);
				$this->redirect('/Home/Email/Lookemail/index/abc/3');
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
