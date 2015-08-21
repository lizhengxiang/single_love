<?php

namespace Home\Controller\About;
use Think\Controller;
use Think\Upload;
class AboutController extends Controller {

	public function index(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				import('ORG.Net.UploadFile');
				$upload = new \Think\Upload();// 实例化上传类
				$upload->maxSize = 3145728 ;// 设置附件上传大小
				$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				//$upload->rootPath = './Public/'; // 设置附件上传根目录
				$upload->savePath = ''; // 设置附件上传（子）目录
				//不设置子目录
				//$upload->autoSub = false;
				// 上传文件
				$info = $upload->upload();
				if(!$info) {// 上传错误提示错误信息
					//$this->error($upload->getError());
				}else{// 上传成功
					//獲取id
					//获取六张照片的路勁
					if($info[0]["savename"]){
						$dataa['pic1'] = 'https://localhost/single_love/Uploads/'.$info[0]['savepath'].$info[0]["savename"];
					}else{
						$dataa['pic1'] = '0';
					}
					if($info[1]["savename"]){
						$dataa['pic2'] = 'https://localhost/single_love/Uploads/'.$info[1]['savepath'].$info[1]["savename"];
					}else{
						$dataa['pic2'] = '0';
					}
					if($info[2]["savename"]){
						$dataa['pic3'] = 'https://localhost/single_love/Uploads/'.$info[2]['savepath'].$info[2]["savename"];
					}else{
						$dataa['pic3'] = '0';
					}
				}
				$dataa['members_id'] = cookie('user');
				$dataa['public'] = I('public');
 				$dataa['content'] = I('name');
				$dataa['time'] = date('Y-m-d H:i:s');
				if($dataa['content']){
					$think_about = M('about');
					$think_about->add($dataa);
				}
			$this->redirect('Home/Home/Home/index');
			}
		}else{
			//如果没有登录访问就提示这句话
			$this->success('请您登录后再访问','/single_love/index.php/Home/Login/Login/index', 5);
		}		
	}

}
