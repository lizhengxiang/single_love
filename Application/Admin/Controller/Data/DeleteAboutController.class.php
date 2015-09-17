<?php
namespace Admin\Controller\Data;
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
				$data['tag_a'] = 1;
				$data['tag'] = 1;
				$aboutid = M('about');
				$aboutid->field('tag,tag_a')->where($map)->save($data);
				$this->redirect('Admin/Data/Data/index/user_id/'.I('userid'));
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
