<?php
namespace Admin\Controller\Data;
use Think\Controller;

class AboutController extends Controller {
   public function index($user_id){

		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				//获取id帐号
				$mapp['members_id'] = $user_id;
				$mapp['tag'] = 0;
				$mapp['tag_a'] = 0;
				//更具id取出该好友的前50条说说记录
				$think_about = M('about');
				$about['about'] = $think_about->where($mapp)->limit(50)->order('time desc')->select();
				$number = $think_about->where($mapp)->count();
				if($number >= 50)
					$number = 50;
				$about['num'] = $number;

				//根据id统计出评论数量
				$nickname = M('data');
				$comments = M('comments');
				for($i = 0; $i < $about['num']; $i++){
					$aboutcount['aboutid'] = $about['about'][$i]['id'];
					$about['count'][$i] = $comments->where($aboutcount)->count();
				}
				return $about;
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
