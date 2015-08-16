<?php

namespace Home\Controller\Personal;
use Think\Controller;
class NewController extends Controller {
   public function index($user_id){
		//获取用户帐号
		$map['members_id'] = $user_id;

		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				//填写访问时间
				//自己浏览自己就不需要添加浏览记录
				if($user_id != cookie('user')){
					//dump($data);  打印出这句话就找到了为什么有bug,因为上面把个人资料取出来放在data里面了,所以data里面有id,所以导致关键字重复
					$think_look = M('look');
					$dataa['members_id_a'] = cookie('user');
					$dataa['members_id_b'] = $user_id;
					$dataa['browse'] = date('Y-m-d h:i:sa');
					$mapp['members_id_a'] = $dataa['members_id_a'];
					$mapp['members_id_b'] = $user_id;
					//查看是不是已经在数据库里面有着两个人的资料
					//若有就更新,若没有就添加
					$count = $think_look->where($mapp)->count();
					if($count){
						$think_look->where($mapp)->data($dataa)->save();
					}else{
						$think_look->data($dataa)->add();
					}
				}

				//获取最近登录的时间
				$think_logintime = M('logintime');
				$logintime = $think_logintime->where($map)->find();
				$login_time = $logintime['logintime1'];
				$this->assign('login_time', $login_time);	
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
		
				$this->display('Personal/Personal/mode/index');
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
