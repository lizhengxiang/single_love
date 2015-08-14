<?php

namespace Home\Controller\Look;
use Think\Controller;
require_once 'SeeController.class.php';
require_once 'NewuserController.class.php';
require_once 'ISeeController.class.php';
require_once 'FollowersaController.class.php';
require_once 'FollowersbController.class.php';

class LookController extends Controller {

   public function index(){
		//echo $map;
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
				//获取看过我的会员
				$members = new SeeController();
				$user = $members->index();
				$this->assign('count', $user['sum']);
				
				for($i = 0; $i < $user['sum']; $i++){
					//实例化会员信息
					$UserInformation[$i] = new NewuserController();
					//更具会员的id号,取出会员的照片,资料
					$user[$i] = $UserInformation[$i]->index($user['user'][$i]['members_id_a']);
					//保存会员的id号和浏览时间,要在html代码中用
					$user[$i]['id'] = $user['user'][$i]['members_id_a'];
					$user[$i]['time'] = $user['user'][$i]['browse'];
					$this->assign('user', $user);
				}

				//获取我浏览过的人
				$Isee = new ISeeController();
				$browse = $Isee->index();
				for($i = 0, $j = 0; i < 10 and $browse['user'][$i]['members_id_b']; $j++, $i++){
					//实例化会员信息
 		        	$UserInformation[$i] = new NewuserController();
 	                //更具会员的id号,取出会员的照片,资料
 	                $seen[$i] = $UserInformation[$i]->index($browse['user'][$i]['members_id_b']);
 	               	//保存会员的id号和浏览时间,要在html代码中用
 	                $seen[$i]['id'] = $browse['user'][$i]['members_id_b'];
 	                $seen[$i]['time'] = $browse['user'][$i]['browse'];
 	                $this->assign('seen', $seen);
				}
				$this->assign('Seenuser', $j);
				
				//获取谁关注我
				$Followers_a = new FollowersaController();
				$Follower=$Followers_a->index();
				for($i = 0; $i < $Follower['count']; $i++){
 		            //实例化会员信息
 	            	$UserInformation[$i] = new NewuserController();
 					//更具会员的id号,取出会员的照片,资料
 					$Follower[$i] = $UserInformation[$i]->index($Follower['user'][$i]['members_id_a']);
 					//保存会员的id号和浏览时间,要在html代码中用
 					$Follower[$i]['id'] = $Follower['user'][$i]['members_id_a'];
 					$Follower[$i]['time'] = $Follower['user'][$i]['time'];
 					$this->assign('Follower', $Follower);
 				}
				//获取我关注的人					
				$Following_b = new FollowersbController();
                $Following_a = $Following_b->index();
				$Following['count'] = $Following_a['count'];
                for($i = 0; $i < $Following_a['count']; $i++){
                	//实例化会员信息
                    $UserInformation[$i] = new NewuserController();
                    //更具会员的id号,取出会员的照片,资料
                    $Following[$i] = $UserInformation[$i]->index($Following_a['user'][$i]['members_id_b']);
                    //保存会员的id号和浏览时间,要在html代码中用
                    $Following[$i]['id'] = $Following_a['user'][$i]['members_id_a'];
                    $Following[$i]['time'] = $Following_a['user'][$i]['time'];
                    $this->assign('Following', $Following);
               	}

				

				$this->display();
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
