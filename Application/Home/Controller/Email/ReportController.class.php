<?php
//举报邮件
namespace Home\Controller\Email;
use Think\Controller;
use Think\Upload;
class ReportController extends Controller {
	public function email(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
			
				//获取相应内容
				$data['members_id_b'] = I('user_id');
				$data['members_id_a'] = cookie('user');
				$data['members_id_c'] = '8888888888';
				$data['content'] = trim(I('email'));
				$data['time'] = date('Y-m-d H:i:s');
				$data['state'] = 0;
				$data['tag_a'] = 0;
				
				$think_email = M('report');
				$think_email->field('members_id_a,members_id_b,members_id_c,content,time,state,tag_a')->data($data)->add();
				$this->error('举报成功');
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}					
	}
}
