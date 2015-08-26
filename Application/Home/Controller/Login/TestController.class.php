<?php
namespace Home\Controller\Login;
use Think\Controller;
class TestController extends Controller {
	public function index(){
		$this->display();
	}
   	public function verify_c(){
		//登录页面调用
		//echo T();
		$config = array(
			'fontSize' => 30,
			'length' => 4,
			'useNoise' => false
		);
		$verify = new \Think\Verify($config);
		$verify -> entry();
    }
}
