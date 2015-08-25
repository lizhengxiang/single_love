<?php

namespace Home\Controller\Comments;
use Think\Controller;
require_once 'AboutCommitController.class.php';
class  CommentsController extends Controller {
	public function index($aboutid){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				//根据说说的id取出该条说说
				$map['id'] = $aboutid;
				$think_about = M('about');
				$about = $think_about->where($map)->select();
				//dump($about);
				//获取用户头像及照片
				$photo1 = M('photo');
 				//根据id取出照片
				$map_head['members_id'] = $about[0]['members_id'];
 				$head = $photo1->field('head_ptoto')->where($map_head)->find();
 				//给模板变量赋
 				$this->assign('head', $head);	
				$this->assign('about',$about);

				//实例化帖子的内容
				$AboutCommit  = new AboutCommitController();
				$commit = $AboutCommit->index($aboutid);
				//dump($commit);
				$this->assign('commit',$commit);
				//dump($commit);
				//$this->display('Personal/Personal/mode/comments');
				//$this->display('Personal/Personal/mode/iii');
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}					
	}
}
