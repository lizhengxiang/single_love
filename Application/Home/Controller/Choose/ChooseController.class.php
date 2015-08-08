<?php

namespace Home\Controller\Choose;
use Think\Controller;
class ChooseController extends Controller {

    public function index(){
		//联系方式调用
		//echo T();
		$this->display();
    }
	public function choose(){
		//获取网页表单
		echo $map['members_id'] = trim(I('members_id'));
		echo $data['agea'] = trim(I('agea'));
		echo $data['ageb'] = trim(I('ageb'));
		echo $data['heighta'] = trim((I('heighta')));
		echo $data['heightb'] = trim(I('heightb'));
		echo $data['school'] = trim(I('school'));
		echo $data['hunyin'] = trim(I('hunyin'));
		echo $data['work'] = trim(I('work'));
		echo $data['photo'] = trim(I('photo'));
		echo $data['modify'] = date('Y-m-d  h:i:sa');
		//实例化choose对象
		$choose = M('choose');
		//根据条件跟新记录
		//$choose->where($map)->data($data)->save();
	}
}
