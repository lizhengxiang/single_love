<?php

namespace Admin\Controller\Gift;

use Think\Controller;
use Think\Upload;
class GiftController extends Controller {

    public function index(){
		$this->display();
    }
	public function upload(){
				import('ORG.Net.UploadFile');
				$upload = new \Think\Upload();// 实例化上传类
				$upload->maxSize = 3145728 ;// 设置附件上传大小
				$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				$upload->savePath = ''; // 设置附件上传（子）目录
				$info = $upload->uploadOne($_FILES['user_pic']);
				if(!$info) {// 上传错误提示错误信息
					$this->error($upload->getError());
				}else{// 上传成功
				
					//獲取礼物图片
					$data['road'] = 'https://localhost/single_love/Uploads/'.$info['savepath'].$info["savename"];
					//获取礼物信息
					$data['name'] = I('name');
					$data['type'] = I('type');
					$data['link'] = I('link');
					$data['ordername'] = I('ordername');
					$data['note'] = I('note');
					$data['price'] = I('price');
					$data['time'] = date("Y-m-d h:i:sa");
					//實例化數據對象
					$information = M('gift');
 	        		//根据主键查找会员资料在不在会员基本信息表,更具条件更新记录
					//个人头像
					if($info['savepath'].$info["savename"]){
                		$information->data($data)->add();
					}

					//$this->success('图片上传成功');
				}

			
		}		
}
