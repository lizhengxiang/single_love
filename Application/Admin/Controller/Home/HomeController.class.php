<?php
namespace Admin\Controller\Home;
use Think\Controller;
require_once 'EmailcountController.class.php';
require_once 'EmailreadController.class.php';

class HomeController extends Controller {

	public function index(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Admin/Login/Login/index', 2);
			}else{
				//获取投诉邮件
				//统计未读邮件
				$email_count = new EmailcountController();
				$count = $email_count->index('8888888888');
				$this->assign('count', $count);
				
				//统计已读邮件
				$email_count = new EmailreadController();
        		$read = $email_count->index(cookie('8888888888'));
        		$this->assign('read', $read);
				//dump($read);
				$this->display('/mode/lookemail');
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Admin/Login/Login/index', 2);
		}					
	}
}
