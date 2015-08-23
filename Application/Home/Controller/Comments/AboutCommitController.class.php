<?php

namespace Home\Controller\Comments;
use Think\Controller;
class  AboutCommitController extends Controller {
	public function index($aboutid){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				$think_comments = M('comments');
				$tag['aboutid'] = $aboutid;
				//根据帖子的id取出帖子评论
				$commit['about'] = $think_comments->order('time desc')->where($tag)->select();
				$commit['count'] = $think_comments->where($tag)->count();
				return $commit;
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}					
	}
}
