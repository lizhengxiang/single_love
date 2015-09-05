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
				if($type == NULL AND $username == NULL){
					$map['school'] = $school;
					$goods['var'] = $think_book->where($map)->select();
					$goods['count'] = $think_book->where($map)->count();
					$this->assign('goods', $goods);
				}else if($type != NULL AND $username == NULL){
					$map['school'] = $school;
					$map['type'] = $type;
                    dump($showbook = $think_book->where($map)->select());
				}else if($type == NULL AND $username != NULL){
					$map['bookname'] = array('like', '%'.$username.'%');
					$map['school'] = $school;
                   	dump($showbook = $think_book->where($map)->select());
				}else if($type != NULL AND $username != NULL){
					$map['school'] = $school;
					$map['type'] = $type;
					$map['bookname'] = array('like', '%'.$username.'%');
					dump($showbook = $think_book->where($map)->select());
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

				//
			}
		}else{
			//如果没有登录访问就提示这句话
			$this->success('请您登录后再访问','/single_love/index.php/Home/Login/Login/index', 5);
		}		
	}
}
