<?php

namespace Home\Controller\Edge;
use Think\Controller;
class SeeController extends Controller {

   public function index($school, $gender){
		//获取用户帐号
		$mapa['members_id'] = cookie('user');

		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{

				$think_data = M('data');
				echo $mapp['schooling'] = $school;
				echo $mapp['gender'] = $gender;

				$user['user'] = $think_data->where($mapp)->limit(48)->order('modeify desc')->select();
				$user['sum'] = $think_data->where($mapp)->count();
				if($user['sum'] > 48)
					$user['sum'] = 48;
				return $user;			
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
?>
