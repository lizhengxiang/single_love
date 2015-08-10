<?php
namespace Home\Controller\Appearance;
use Think\Controller;
class AppearanceController extends Controller {

    public function index(){
		//联系方式调用
		//echo T();
		$this->display();
    }
	public function appearance(){
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
				$data['weight'] = trim(I('weight'));
				$data['size'] = trim(I('size'));
				$data['health'] = trim((I('health')));
				$data['evaluation'] = trim(I('evaluation'));
				$data['clothes'] = trim(I('clothes'));
				$data['disposition'] = trim(I('disposition'));
				$data['temper'] = trim(I('temper'));
				$data['modify'] = date('Y-m-d  h:i:sa');
				//实例化appearance对象
				$appearance = M('appearance');
				//根据条件跟新记录
				$appearance->where($map)->data($data)->save();
				$this->redirect('/Home/Unit/Unit/index', 0, '');
			}		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}		
	}
}
