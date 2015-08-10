<?php

namespace Home\Controller\Unit;
use Think\Controller;
class UnitController extends Controller {

    public function index(){
		//联系方式调用
		//echo T();
		$this->display();
    }
	public function unit(){
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
				$data['unit_type'] = trim(I('unit_type'));
				$data['professional'] = trim(I('professional'));
				$data['work'] = trim((I('work')));
				$data['move'] = trim(I('move'));
				$data['family'] = trim(I('family'));
				$data['school'] = trim(I('school'));
				$data['major'] = trim(I('major'));
				$data['language'] = trim(I('language'));
				$data['modify'] = date('Y-m-d  h:i:sa');
				//实例化unit对象
				$unit = M('unit');
				//根据条件跟新记录
				$unit->where($map)->data($data)->save();
				//跳转到生活方式页面
				$this->redirect('/Home/Life/Life/index', 0, '');
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}					
	}
}

