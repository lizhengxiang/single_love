<?php
namespace Admin\Controller\Data;
use Think\Controller;
require_once 'AboutController.class.php';
class DataController extends Controller {
	public function index($user_id = 0){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Admin/Login/Login/index', 2);
			}else{
				if($user_id == 0)
				$user_id = I('username');
				//我的商品
				$think_book = M('book');
				$map_b2['members_id'] = $user_id;
				$map_b2['abc'] = 0;
				$order3['book'] = $think_book->where($map_b2)->order('time desc')->select();
				$order3['count'] = $think_book->where($map_b2)->count();
				$this->assign('count3',$order3);
				//dump($order3);
				$this->assign('user_id', cookie('user'));
				$this->assign('tag', $abc);
		
				//获取帖子和评论次数
				$about_t = new AboutController();
				$about = $about_t->index($user_id);
				$this->assign('about', $about);				
				$this->display('/mode/look');
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Admin/Login/Login/index', 2);
		}					
	}
	
	public function book_b($bookid, $userid){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				$think_order = M('book');
				$map_a['id'] = $bookid;
				$mapp['abc'] = 1;
				$think_order->where($map_a)->field('abc')->save($mapp);
				$this->redirect('Admin/Data/Data/index/user_id/'.I('userid'));
			}
		}else{
			//如果没有登录访问就提示这句话
			$this->success('请您登录后再访问','/single_love/index.php/Home/Login/Login/index', 5);
		}		
	}

}
