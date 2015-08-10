<?php

namespace Home\Controller\Home;
use Think\Controller;
require_once 'NewuserController.class.php';
require_once 'EmailController.class.php';
class HomeController extends Controller {

    public function index(){
		//取出会员的昵称等信息,调用类
		//取出新加入的五个会员的id号
		$think_data = M('registered');
		$think_data_id = $think_data->field('members_id')->order('join_time  desc')->limit(4)->select();

		//取出第一個會員的基本資料
		$user_id_1 = $think_data_id[0]['members_id'];
		$nweuser = new NewuserController();
		$user_1 = $nweuser->index($user_id_1);
		$user_1['id'] = $user_id_1;
		$this->assign('user_1', $user_1);	

		//取出第二個會員的基本資料
        $user_id_2 = $think_data_id[1]['members_id'];
	    $nweuser = new NewuserController();
		$user_2 = $nweuser->index($user_id_2);	
		$user_2['id'] = $user_id_2;
		$this->assign('user_2', $user_2);

		//统计邮件
		$email_count = new EmailController();
		$count = $email_count->index(cookie('user'));
		$this->assign('count', $count);
		
		$this->display();
    }
}
