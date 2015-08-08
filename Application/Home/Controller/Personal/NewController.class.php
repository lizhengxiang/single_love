<?php

namespace Home\Controller\Personal;
use Think\Controller;
class NewController extends Controller {

   public function index($user_id){
		//echo $map;
		//获取用户帐号
		echo $map['members_id'] = $user_id;

		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				//获取用户头像及照片
				$photo1 = M('photo');
				//根据id取出照片
				$photo = $photo1->where($map)->find();
				//给模板变量赋值
				$this->assign('photo', $photo);
		
				//取出用户基本资料
				$data1 = M('data');
				$data = $data1->where($map)->find();
				//计算年龄
				$data['age'] = date("Y-m-d") - $data['birth'];
				$this->assign('data', $data);
		
				//取出内心独白
				$think_lnner = M('lnner');
				$lnner = $think_lnner->where($map)->find();
				$this->assign('lnner', $lnner);
		
				//取出外貌性格
				$think_appearance = M('appearance');
				$appearance = $think_appearance->where($map)->find();
				$this->assign('appearance', $appearance);

				//取出工作学习
				$think_unit = M('unit');
				$unit = $think_unit->where($map)->find();
				$this->assign('unit', $unit);

				//取出生活方式
				$think_life = M('life');
				$life = $think_life->where($map)->find();
				$this->assign('life', $life);		
				//取出兴趣爱好

				//取出择偶条件
				$think_choose = M('choose');
				$choose = $think_choose->where($map)->find();
				$this->assign('choose', $choose);
		
				$this->display('Personal/Personal/index');
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
