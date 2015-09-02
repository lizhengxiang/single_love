<?php
namespace Home\Controller\Information;
use Think\Controller;
class InformationController extends Controller {
    public function index(){
		//调用修改资料页面
		$user_id['id'] = cookie('user');
		$this->assign('user_id', $user_id);
		$this->display('Personal/Personal/mode/modifyData');
    }

	public function information(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				$map['members_id'] = $map_id['members_id'];
				//获取会员提交的基本信息
				$data['members_id'] = $map_id['members_id'];
				//$map['members_id']=I('members_id');
				$data['birth'] = I('birth');
				$data['car'] = I('car');
				$data['children'] = I('childern');
				$data['constellation'] = I('constellation');
				$data['gender'] = I('gender');
				$data['height'] = I('height');
				$data['home'] = I('home');
				$data['income'] = I('income');
				$data['live'] = I('live');
				$data['marriage'] = I('marriage');
				$data['modify'] = I('modify');
				$data['nickname'] = I('nickname');
				$data['place'] = I('place');
				$data['schooling'] = I('schooling');
				$data['type'] = I('type');
				$data['work'] = I('place');
				$data['modeify'] = date("Y-m-d H:i:s");
				//实例化data对象
				$information = M('data');
				//根据主键查找会员资料在不在会员基本信息表,更具条件更新记录
				$information->where($map)->data($data)->save();
				//重定向到photo页面
				$this->redirect('/Home/Photo/Photo/index');
			}
		}else{
			$this->success('请您登录后再访问','/single_love/index.php/Home/Login/Login/index', 5);
		}		
	}
}
