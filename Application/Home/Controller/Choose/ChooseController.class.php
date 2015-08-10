<?php

namespace Home\Controller\Choose;
use Think\Controller;
class ChooseController extends Controller {

    public function index(){
		$user_id['id'] = cookie('user');
		$this->assign('user_id', $user_id);
		$this->display();
    }
	public function choose(){
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
				$data['agea'] = trim(I('agea'));
				$data['ageb'] = trim(I('ageb'));
				$data['heighta'] = trim((I('heighta')));
				$data['heightb'] = trim(I('heightb'));
				$data['school'] = trim(I('school'));
				$data['hunyin'] = trim(I('hunyin'));
				$data['work'] = trim(I('work'));
				$data['photo'] = trim(I('photo'));
				$data['modify'] = date('Y-m-d  h:i:sa');
				//实例化choose对象
				$choose = M('choose');
				//根据条件跟新记录
				$choose->where($map)->data($data)->save();
				$this->redirect('Home/Personal/New/index/user_id/'.cookie('user'), 0, '');
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}					
	}
}
