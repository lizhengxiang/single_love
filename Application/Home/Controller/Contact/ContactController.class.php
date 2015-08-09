<?php

namespace Home\Controller\Contact;
use Think\Controller;
class ContactController extends Controller {

    public function index(){
		//联系方式调用
		//echo T();
		$this->display();
    }
	public function contact(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				//获取网页表单
				$map['members_id'] = cookie('user');
				$data['name'] = trim(I('name'));
				$data['unit'] = trim(I('unit'));
				$data['tel'] = trim((I('tel')));
				$data['blog'] = trim(I('blog'));
				$data['qq'] = trim(I('qq'));
				$data['weibo'] = trim(I('weibo'));
				$data['msn'] = trim(I('msn'));
				$data['home'] = trim(I('home'));
				$data['modify'] = date('Y-m-d  h:i:sa');
				//实例化contact对象
				$contact = M('contact');
				//根据条件跟新记录
				$contact->where($map)->data($data)->save();
				//跳转到联系方式页面
				$this->redirect('/Home/Appearance/Appearance/index', 0, '');
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}					
	}
}
