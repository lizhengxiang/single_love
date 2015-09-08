<?php

namespace Home\Controller\Book;
//import("ORG.Net.UploadFile");
use Think\Controller;
use Think\Upload;
class ShowBookController extends Controller {
	public function index(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				$think_book = M('book');
				//获取要搜索的资料
				$school = I('school');
				$type = I('type');
				$username = I('username');
				//$map['bookname'} = array('like', '%'.$username.'%');
				//如果学校为空,则根据自己注册的信息取出学校
				if($school == NULL){
					$data_a = M('data');
					$user['members_id'] = cookie('user');  
					$schooling = $data_a->where($user)->field('schooling')->find();
					$school = $schooling['schooling'];
				}
				//若类型和商品名为空,则取出该学校的所有商品,且数量大于一
				$map['number'] = array('gt', 0);
				$map['abc'] = 0;
				if($type == NULL AND $username == NULL){
					$map['school'] = $school;
					$goods['var'] = $think_book->where($map)->select();
					$goods['count'] = $think_book->where($map)->count();
					$this->assign('goods', $goods);
				}else if($type != NULL AND $username == NULL){
					$map['school'] = $school;
					$map['type'] = $type;
                    $goods['var'] = $think_book->where($map)->select();
					$goods['count'] = $think_book->where($map)->count();
					$this->assign('goods', $goods);
				}else if($type == NULL AND $username != NULL){
					$map['bookname'] = array('like', '%'.$username.'%');
					$map['school'] = $school;
                   	$goods['var'] = $think_book->where($map)->select();
					$goods['count'] = $think_book->where($map)->count();
					$this->assign('goods', $goods);
				}else if($type != NULL AND $username != NULL){
					$map['school'] = $school;
					$map['type'] = $type;
					$map['bookname'] = array('like', '%'.$username.'%');
					$goods['var'] = $think_book->where($map)->select();
					$goods['count'] = $think_book->where($map)->count();
					$this->assign('goods', $goods);
				}
				$this->display('Personal/Personal/mode/showbook');
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
				//获取订单信息,然后插入数据库表.
				$map['members_id_b'] = I('members');
				$map['school'] = I('school');
				$map['home'] = I('place');
				$map['tel'] = I('tel');
				$map['bookid'] = I('book_id');
				$map['members_id_a'] = cookie('user');
				$map['time_a'] = date('Y-m-d H:i:s');
				$map['tag'] = 0;
				$map['abc'] = 0;
				$think_order = M('order');
				$think_order->data($map)->add();
				//数量减一
				$think_book = M('book');
				$map_book['id'] = $map['bookid'];
				$book_num = $think_book->where($map_book)->field('number')->find();
				$book_number['number'] = $book_num['number'] - 1;
				$book_num = $think_book->where($map_book)->field('number')->save($book_number);
				
			}
		}else{
			//如果没有登录访问就提示这句话
			$this->success('请您登录后再访问','/single_love/index.php/Home/Login/Login/index', 5);
		}		
	}
}
