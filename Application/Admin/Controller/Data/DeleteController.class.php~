<?php
namespace Admin\Controller\Data;
use Think\Controller;

class DeleteController extends Controller {
   public function index(){

		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				//根据邮件id和自己的id刪除已發送郵件
				$map['id'] = I('emailid');
				$map['members_id_a'] = I('user_id');						
				$data['tag_c'] = 1;
				$aboutid = M('email');
				$aboutid->field('tag_c')->where($map)->save($data);
				$this->redirect('Admin/Data/Data/index/user_id/'.I('user_id'));
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
