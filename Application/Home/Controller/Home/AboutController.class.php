<?php

namespace Home\Controller\Home;
use Think\Controller;
class AboutController extends Controller {

   public function index(){
		//获取自己的帐号
		$mapa['members_id'] = cookie('user');

		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				//获取我自己和关注我的人的帖子
				//我關注的人
				$think_look = M('followers');
				$map['members_id_a'] = cookie('user');
				$tag = $think_look->field('members_id_b')->where($map)->select();
				$num = $think_look->field('members_id_b')->where($map)->count();
				//取出我关注人的id号然后查找他们的说说
				if($num){
					for($i = 0; $i < $num; $i++){
						if($i != 0){
							$li .= ' OR ';
						}
						$li .= 'members_id = ';
						$li .= $tag[$i]['members_id_b'];
					}
					$li .= ' OR '.'members_id = '.cookie('user');
				}
				//若我没有关注任何人则显示自己的说说
				if($num == 0)
					$li = 'members_id = '.cookie('user');
				//$li['tag'] = 0;
				$think_about = M('about');
				$about['about'] = $think_about->where($li)->limit(50)->order('time desc')->select();
				$number = $think_about->where($li)->count();
				if($number >= 50)
					$number = 50;
				$about['num'] = $number;
				//根据id统计出评论数量
				$nickname = M('data');
				$comments = M('comments');
				$number = 0;
				for($i = 0; $i < $about['num']; $i++){
					//取出主人没有删除的说说
					if($about['about'][$i]['tag'] == 0){	
						$abou['about'][$number] = $about['about'][$i];
						$aboutcount['aboutid'] = $about['about'][$i]['id'];
						$abou['count'][$number] = $comments->where($aboutcount)->count();
					
						$aboutnick['members_id'] = $about['about'][$i]['members_id'];
						$name_nickname = $nickname->field('nickname')->where($aboutnick)->find();
						$abou['nickname'][$number] = $name_nickname['nickname'];
						$number++;
					}
				}
				$abou['num'] = $number;
				return $abou;
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
