<?php
namespace Home\Controller\Life;
use Think\Controller;
class LifeController extends Controller {
    public function index(){
		//调用生活方式页面
		//echo T();
		$this->display();
    }

	public function life(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				//获取表單提交的基本信息
				$map['members_id']=I('members_id');
				$data['smoking'] = I('smoking');
				$data['drinking'] = I('drinking');
				$data['exercise'] = I('exercise');
				$data['diet'] = I('diet');
				$data['shopping'] = I('shopping');
				$data['religious'] = I('religious');
				$data['worktime'] = I('worktime');
				$data['social'] = I('social');
				$data['consumption'] = I('consumption');
				$data['home'] = I('home');
				$data['distribution'] = I('distribution');
				$data['ranking'] = I('ranking');
				$data['parents'] = I('parents');
				$data['child'] = I('child');
				$data['married'] = I('married');
				$data['pet'] = I('pet');
				$data['petabout'] = I('petabout');
				$data['modify'] = date("y-m-d h:i:sa");
				//实例化life对象
				$life = M('life');
				//根据条件更新记录
				$life->where($map)->data($data)->save();
				//跳转到联系方式页面
				$this->redirect('/Home/Contact/Contact/index', 0, '');
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}	
	}
}
