<?php

namespace Home\Controller\Forgot;
use Think\Controller;
class ForgotController extends Controller {

   public function index(){
		$this->display('Personal/Personal/mode/forgot');
	}
	public function forgot(){
		$map['email'] = trim(I('email'));
		$registered = M('registered');
		$test = $registered->field('email')->where($map)->find();
		if($map['email'] === $test['email']){
			//kk
		}else{
			$this->error('error');
		}
	}
}
