<?php
namespace Home\Controller\Registered;
use Think\Controller;
class RegisteredController extends Controller {
	public function index(){    	
	//调用登录界面
		$this->display('Personal/Personal/mode/registered');
	}
	public function registered(){

		require_once'make_password.php';
		require_once'sendmail.php';
		require_once'members_id.php';
		//实例化registered模型
		$registered = M('registered');
		$data['email'] = trim(I('email'));
		$data_num = $registered->limit(1)->order('id desc')->select();
		//echo $data_num[0]['members_id'];
		$data['members_id'] = members_id($data_num[0]['members_id']);
		$data['weChat'] = trim(I('wechat'));
		$data['type'] = make_password(8);

		//获取加密前的密码
		$password_before = make_password(8);
		//对密码进行加密
		$data['password'] = md5($password_before);
		$data['join_time'] = date("Y-m-d");
		//检查注册信息已经在数据库中
		$email['email'] = $data['email'];
		if($registered->where($email)->find()){
			$this->error('email帐号在数据库中已经从在, 请你重新注册');
		}
		$weChat['weChat'] = $data['weChat'];
		if($registered->where($weChat)->find()){
  			$this->error('微信帐号在数据库中已经从在,请你重新注册');
 		}
		//创建数据对象会员帐号
		$registered->create($data);
		//把创建好的会员帐号数据添加到数据库中
		$result = $registered->add();

		//创建会员基本信息
		$think_data = M('data');
		$information['members_id'] = $data['members_id'];
		$information['modify'] = date("Y-m-d");
		$information['nickname'] = trim(I('nickname'));
		$information['gender'] = I('gender');
		$information['schooling'] = I('school');
		$information['birth'] = (I('year').'-'.I('mouth').'-'.I('day'));
		//创建会员基本信息数据对象
		$think_data->create($information);
		//添加会员id到会员基本表中
		$think_data->add();
		
		//创建会员相册
		//创建会员相册基本信息数据对象
		$think_photo = M('photo');
		$think_photo->create($information);
		//添加到会员相册基本表中
		$think_photo->add();
		
		//创建会员内心独白
		//创建会员内心独白数据对象
		$think_lnner = M('lnner');
		$think_lnner->create($information);
		//添加会员内心对白到数据表中
		$think_lnner->add();
		
		//创建联系方式
		//实例化contact对象
		$think_contact = M('contact');
		$think_contact->create($information);
		//添加数据到表中
		$think_contact->add();
		
		/*
		//創建外貌特征
		//实例化appearance对象
		$think_appearance = M('appearance');
		$think_appearance->create($information);
		//添加数据到列表
		$think_appearance->add();
		
		//创建工作学习表
		//实例化unit对象
		$think_unit = M('unit');
		$think_unit->create($information);
		//添加数据到列表
		$think_unit->add();
		
		//生活方式
		//实例化life对象
		$think_life = M('life');
		$think_life->create($information);
		//添加数据到数据表		
		$think_life->add();
		
		//兴趣爱好
		//实例化love对象
		$think_love = M('love');
		$think_love->create($information);
		//添加数据到数据表
		$think_love->add();		
		
		//添加擇偶條件
		//實例化choose對象
		$think_choose = M('choose');
		$think_choose->create($information);
		//添加數據到列表		
		$think_choose->add();
		//创建登录数据表
		*/
		
		$think_logintime = M('logintime');
		$login['members_id'] = $data['members_id'];
		$think_logintime->create($login);
		$think_logintime->add();

		//验证数据有没有创建成功
		if($result){
			//发送短信郵件
			$content = "您的会员帐号是: ".$data['members_id']."\n"."您的会员密码是: ".$password_before;
			sendmail($data['email'], $content);
			$this->error('注册成功, 邮件已发送');
		}else{
			$this->error('新增失敗,亲您重新注册');
		}
	}
}
