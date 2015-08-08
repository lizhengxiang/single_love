<?php

namespace Home\Controller\Contact;
use Think\Controller;
class ContactController extends Controller {

    public function index(){
		//联系方式调用
		//echo T();
		$this->display();
    }
	public function contact(){
		//获取网页表单
		echo $map['members_id'] = trim(I('members_id'));
		echo $data['name'] = trim(I('name'));
		echo $data['unit'] = trim(I('unit'));
		echo $data['tel'] = trim((I('tel')));
		echo $data['blog'] = trim(I('blog'));
		echo $data['qq'] = trim(I('qq'));
		echo $data['weibo'] = trim(I('weibo'));
		echo $data['msn'] = trim(I('msn'));
		echo $data['home'] = trim(I('home'));
		echo $data['modify'] = date('Y-m-d  h:i:sa');
		//实例化contact对象
		$contact = M('contact');
		//根据条件跟新记录
		$contact->where($map)->data($data)->save();
	}
}
