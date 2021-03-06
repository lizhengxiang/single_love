<?php

namespace Home\Controller\Home;
use Think\Controller;
require_once 'NewuserController.class.php';
require_once 'EmailController.class.php';
require_once 'LookController.class.php';
require_once 'FollowersController.class.php';
require_once 'GiftController.class.php';
require_once 'AboutController.class.php';

class HomeController extends Controller {

    public function index(){
		
		//取出会员的昵称等信息,调用类
		//取出新加入的五个会员的id号
		$think_data = M('registered');
		$id = cookie('user');
		$map['members_id'] = $id;
		//在页面显示自己的id号
		$this->assign('id', $id);
		//获取用户头像及照片
		$photo1 = M('photo');
 		//根据id取出照片
 		$head = $photo1->field('head_ptoto')->where($map)->find();
 		//给模板变量赋
 		$this->assign('head', $head);
		
		$think_data_id = $think_data->field('members_id')->order('join_time  desc')->limit(3)->select();
		//取出这些会员的资料
		$nweuser = new NewuserController();
		for($i = 0; $i < 3; $i++){
			$user_id = $think_data_id[$i]['members_id'];
			$user[$i] = $nweuser->index($user_id);
			$user[$i]['id'] = $user_id;
			$this->assign('user', $user);	
		}
		//要去出新会员的用户数量
		$usercount = 3;
		$this->assign('usercount', $usercount);

		//统计邮件
		$email_count = new EmailController();
		$count = $email_count->index(cookie('user'));
		$this->assign('count', $count);
		
		//统计看过我的人
		$lookCount = new LookController();
		$look_count = $lookCount->index();
		$this->assign('look_count', $look_count);

		//统计关注我的人数
		$Follow = new FollowersController(); 
		$followers = $Follow->index();
		$this->assign('followers', $followers);

		//统计我收到的礼物
		$gift = new GiftController();
		$giftcount = $gift->index();
		$this->assign('giftcount', $giftcount);
		
		//实例化说说并且更具说说取出头像
		$think_about = new AboutController();
		$about = $think_about->index();
		for($i = 0; $i < $about['num']; $i++){
			$tag['members_id'] = $about['about'][$i]['members_id'];
			$about['head'][$i] = $photo1->field('head_ptoto')->where($tag)->find();
		}		
		$this->assign('about', $about);
		$this->display('Personal/Personal/mode/home');
    }
}
