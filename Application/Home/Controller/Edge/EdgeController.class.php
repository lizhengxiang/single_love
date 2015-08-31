<?php
namespace Home\Controller\Edge;
use Think\Controller;
require_once 'SeeController.class.php';
class EdgeController extends Controller {
	public function index(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				$school = I('school');
				$gender = I('gender');
				
				$data_a = M('data');
				if($school == NULL AND $gender == NULL){
					$user['members_id'] = cookie('user');  
					$schooling = $data_a->where($user)->field('schooling')->find();
					$school = $schooling['schooling'];
					$gender_a = $data_a->where($user)->field('gender')->find();
					if($gender_a['gender'] == '男')
						$gender = '男';
					else
						$gender = '男';
					
				}else if($school == NULL AND $gender != NULL){
					$user['members_id'] = cookie('user');
					$schooling = $data_a->where($user)->field('schooling')->find();
					$school = $schooling['schooling'];
				}else if($school != NULL AND $gender == NULL){
					$user['members_id'] = cookie('user');
					$gender_a = $data_a->where($user)->field('gender')->find();
 					if($gender_a['gender'] == '男')
 						$gender = '女';
 					else
 						$gender = '男';
				}
				//獲取我想查找的学校的好友
				$members = new SeeController();
				$user_a = $members->index($school, $gender);
				$this->assign('count', $user_a['sum']);
				$photo1 = M('photo');
				for($i = 0; $i < $user_a['sum']; $i++){
					//获取用户头像及照片
					//根据id取出照片
					$map_a['members_id'] = $user_a['user'][$i]['members_id'];
					$photo = $photo1->where($map_a)->find();
					$user_a[$i]['head_photo'] = $photo['head_ptoto'];
		
				}
				dump($user_a);
				$this->assign('user', $user);

			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}					
	}
}
