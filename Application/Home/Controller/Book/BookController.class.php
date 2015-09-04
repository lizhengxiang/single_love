<?php

namespace Home\Controller\Book;
//import("ORG.Net.UploadFile");
use Think\Controller;
use Think\Upload;
class BookController extends Controller {
	public function index(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				$this->display('Personal/Personal/mode/book');
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
				//获取商品基本信息
				$dataa['school'] = I('school');
				$dataa['type'] = I('type');
				$dataa['bookname'] = I('bookname');
				$dataa['author'] = I('author');
				echo $dataa['press'] = I('press');
				$dataa['number'] = I('number');
				$dataa['price'] = I('price');
				$dataa['members_id'] = cookie('user');			
				import('ORG.Net.UploadFile');
				$upload = new \Think\Upload();// 实例化上传类
				$upload->maxSize = 3145728 ;// 设置附件上传大小
				$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				$upload->savePath = ''; // 设置附件上传（子）目录
				//不设置子目录
				//$upload->autoSub = false;
				// 上传文件
				$info = $upload->upload();
				if(!$info) {// 上传错误提示错误信息
					$this->error($upload->getError());
				}else{// 上传成功
					//获取六张照片的路勁
					if($info[0]["savename"]){
						echo $dataa['pic1'] = 'https://localhost/single_love/Uploads/'.$info[0]['savepath'].$info[0]["savename"];
					}else{
						$dataa['pic_1'] = '0';
					}
					if($info[1]["savename"]){
						echo $dataa['pic2'] = 'https://localhost/single_love/Uploads/'.$info[1]['savepath'].$info[1]["savename"];
					}else{
						echo $dataa['pic_2'] = '0';
					}
					if($info[2]["savename"]){
						echo $dataa['pic3'] = 'https://localhost/single_love/Uploads/'.$info[2]['savepath'].$info[2]["savename"];
					}else{
						$dataa['pic_3'] = '0';
					}
				}
				$dataa['time'] = date('Y-m-d H:i:s');
				$think_book = M('book');
				$think_book->data($dataa)->add();
			//$this->redirect('Home/Home/Home/index');
			}
		}else{
			//如果没有登录访问就提示这句话
			$this->success('请您登录后再访问','/single_love/index.php/Home/Login/Login/index', 5);
		}		
	}
}
