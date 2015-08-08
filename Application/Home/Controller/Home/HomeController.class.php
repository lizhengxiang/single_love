<?php

namespace Home\Controller\Home;
use Think\Controller;
require_once 'NewuserController.class.php';
class HomeController extends Controller {

    public function index(){
		
		//取出会员的昵称等信息,调用类
		$nweuser = new NewuserController();
		$user = $nweuser->index('1508000136');
		$user['id'] = '1508000136';
		$this->assign('user', $user);
		$this->display();
    }
}
