<?php
namespace Home\Controller\Personal;
use Think\Controller;

class DeleteAboutController extends Controller {
   public function index(){

		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				$map['id'] = I('aboutid');						
				$data['tag'] = 1;
				$aboutid = M('about');
				$aboutid->field('tag')->where($map)->save($data);
				$this->redirect('Home/Personal/New/index/user_id/'.I('userid'));
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
