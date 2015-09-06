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
				//获取订单(未处理订单)
				$think_order = M('order');
				$map_a['members_id_b'] = cookie('user');
				$map_a['tag'] = 0;
				$order['var'] = $think_order->where($map_a)->order('time_a desc')->select();
				$order['count'] = $think_order->where($map_a)->count();
				//取出书的信息
				$think_book = M('book');
				for($i = 0; $i < $order['count']; $i++){
					$map_b['id'] = $order['var'][$i]['bookid'];
					$order['book'][$i] = $think_book->where($map_b)->select();
				}
				//dump($order);
				$this->assign('count',$order);

				//已处理订单
				$map_a['members_id_b'] = cookie('user');
				$map_a['tag'] = 1;
				$order1['var'] = $think_order->where($map_a)->order('time_b desc')->select();
				$order1['count'] = $think_order->where($map_a)->count();
				//取出书的信息(已处理订单)
				$think_book = M('book');
				for($i = 0; $i < $order1['count']; $i++){
					$map_b['id'] = $order1['var'][$i]['bookid'];
					$order1['book'][$i] = $think_book->where($map_b)->select();
				}
				$this->assign('count1',$order1);

				//我的订单
				$map_a1['members_id_a'] = cookie('user');
				$order2['var'] = $think_order->where($map_a1)->order('time_a desc')->select();
				$order2['count'] = $think_order->where($map_a1)->count();
				//取出书的信息(已处理订单)
				$think_book = M('book');
				for($i = 0; $i < $order2['count']; $i++){
					$map_b['id'] = $order2['var'][$i]['bookid'];
					$order2['book'][$i] = $think_book->where($map_b)->select();
				}
				$this->assign('count2',$order2);
				
				//我的商品
				$think_book = M('book');
				$map_b2['members_id'] = cookie('user');
				$order3['book'] = $think_book->where($map_b2)->select();
				$order3['count'] = $think_book->where($map_b2)->count();
				$this->assign('count3',$order3);
				dump($order3);
				$this->display('Personal/Personal/mode/order');
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}					
	}

	public function book($bookid){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				$think_order = M('order');
				$map_a['id'] = $bookid;
				$mapp['tag'] = 1;
				$mapp['time_b'] = date('Y-m-d H:i:s');
				$think_order->where($map_a)->field('tag,time_b')->save($mapp);
				$this->redirect('Home/Book/Showorder/index');		
			}
		}else{
			//如果没有登录访问就提示这句话
			$this->success('请您登录后再访问','/single_love/index.php/Home/Login/Login/index', 5);
		}		
	}
}
