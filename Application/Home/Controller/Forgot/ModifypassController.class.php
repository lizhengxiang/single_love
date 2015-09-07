<?php
namespace Home\Controller\Forgot;
use Think\Controller;

class ModifypassController extends Controller {

	public function index(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				$this->assign('user_id', cookie('user'));
				$this->display('Personal/Personal/mode/modifypass');
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}					
	}

	public function forgot(){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{

				$map['members_id'] = cookie('user');
				$password = trim(I('password'));
				$pass_1 = trim(I('pass_1'));
				$pass_2 = trim(I('pass_2'));
				if($pass_1 != $pass_2){
					$this->error('两次输入的密码不一样,请重新输入密码');
				}

				$registered = M('registered');
				//查看邮箱在不在数据库中
				$test = $registered->where($map)->find();

				if(md5($password) === $test['password']){
					//对密码加密
					$data['password'] = md5($pass_1);
					$test = $registered->field('password')->where($map)->save($data);
					$this->redirect('Home/Login/Login/index');
				}else{
					$this->error('旧密码错误,请重新输入');
				}

			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}					
	}

}
