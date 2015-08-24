<?php

namespace Home\Controller\Photo;
//import("ORG.Net.UploadFile");
use Think\Controller;
use Think\Upload;
class PhotoController extends Controller {

    public function index(){
		//调用修改资料页面
		//echo T();
		$this->display('Photo/Photo/index');
    }
	public function upload(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比
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
					$this->error($upload->getError());
				}else{// 上传成功
					//獲取id
					$map['members_id'] = cookie('user');
					//获取六张照片的路勁
					$data['head_ptoto'] = 'https://localhost/single_love/Uploads/'.$info[0]['savepath'].$info[0]["savename"];
					$data['life_photo_1'] = 'https://localhost/single_love/Uploads/'.$info[1]['savepath'].$info[1]["savename"];
					$data['life_photo_2'] = 'https://localhost/single_love/Uploads/'.$info[2]['savepath'].$info[2]["savename"];
					$data['life_photo_3'] = 'https://localhost/single_love/Uploads/'.$info[3]['savepath'].$info[3]["savename"];
					$data['life_photo_4'] = 'https://localhost/single_love/Uploads/'.$info[4]['savepath'].$info[4]["savename"];
					$data['life_photo_5'] = 'https://localhost/single_love/Uploads/'.$info[5]['savepath'].$info[5]["savename"];
 					$data['life_photo_6'] = 'https://localhost/single_love/Uploads/'.$info[6]['savepath'].$info[6]["savename"];			
					$data['modify'] = date("y-m-d");
					//六張照片的狀太
					$data['head_state'] = 0;
					$data['life_state_1'] = 0;
					$data['life_state_2'] = 0;
					$data['life_state_3'] = 0;
					$data['life_state_4'] = 0;
					$data['life_state_5'] = 0;
					$data['life_state_6'] = 0;
					//實例化數據對象
					$information = M('photo');
 	        		//根据主键查找会员资料在不在会员基本信息表,更具条件更新记录
					//个人头像
					if($info[0]['savepath'].$info[0]["savename"]){
                		$information->where($map)->field('head_ptoto')->data($data)->save();
            			$information->where($map)->field('head_state')->data($data)->save();
        			}
					//个人照片
					if($info[1]['savepath'].$info[1]["savename"]){
 	        			$information->where($map)->field('life_photo_1')->data($data)->save();
						$information->where($map)->field('life_state_1')->data($data)->save();
					}
					if($info[2]['savepath'].$info[2]["savename"]){
 	        			$information->where($map)->field('life_photo_2')->data($data)->save();
						$information->where($map)->field('life_state_2')->data($data)->save();
					}
					if($info[3]['savepath'].$info[3]["savename"]){
 	        			$information->where($map)->field('life_photo_3')->data($data)->save();
						$information->where($map)->field('life_state_3')->data($data)->save();
					}
					if($info[4]['savepath'].$info[4]["savename"]){
 	        			$information->where($map)->field('life_photo_4')->data($data)->save();
						$information->where($map)->field('life_state_4')->data($data)->save();
					}
					if($info[5]['savepath'].$info[5]["savename"]){
 	        			$information->where($map)->field('life_photo_5')->data($data)->save();
						$information->where($map)->field('life_state_5')->data($data)->save();
					}
					if($info[6]['savepath'].$info[6]["savename"]){
 	        			$information->where($map)->field('life_photo_6')->data($data)->save();
						$information->where($map)->field('life_state_6')->data($data)->save();
					}
					$information->where($map)->field('modify')->data($data)->save();
					$this->success('图片上传成功');
					//跳转到内心独白
					$this->redirect('/Home/Lnner/Lnner/index', 0, '');
				}

			}
		}else{
			//如果没有登录访问就提示这句话
			$this->success('请您登录后再访问','/single_love/index.php/Home/Login/Login/index', 5);
		}		
	}
}
