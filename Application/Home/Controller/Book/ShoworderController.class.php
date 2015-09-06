<?php

namespace Home\Controller\Book;
//import("ORG.Net.UploadFile");
use Think\Controller;
class ShoworderController extends Controller {
	public function index(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				//获取订单
				$think_order = M('order');
				$map_a['members_id_b'] = cookie('user');
				$map_a['tag'] = 0;
				$order['var'] = $think_order->where($map_a)->select();
				$order['count'] = $think_order->where($map_a)->count();
				//取出书的信息
				$think_book = M('book');
				for($i = 0; $i < $order['count']; $i++){
					$map_b['id'] = $order['var'][$i]['id'];
					$order['book'][$i] = $think_book->where($map_b)->select();
				}
				dump($order);
				$this->display('Personal/Personal/mode/order');
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}					
	}

	public function book(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				
			}
		}else{
			//如果没有登录访问就提示这句话
			$this->success('请您登录后再访问','/single_love/index.php/Home/Login/Login/index', 5);
		}		
	}
}
