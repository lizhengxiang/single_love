<?php

namespace Home\Controller\Commit;
use Think\Controller;
use Think\Upload;
class  CommitController extends Controller {
	public function index(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$dataa = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$dataa['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				//取出评论内容,评论的id,内容的id
				$data['content'] = I('name');
				$data['aboutid'] = I('id');
				$data['contentid'] = I('contentid');
				$data['time'] = date('Y-m-d H:m:s');
				$data['tag'] = 0;
				$data['members_id'] = cookie('user');
				$comments = M('comments');
				$comments->add($data);
				$this->redirect('/Home/Comments/Comments/index/aboutid/'.$data['aboutid']);
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}					
	}
}
