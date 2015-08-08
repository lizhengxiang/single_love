<?php

namespace Home\Controller\Appearance;
use Think\Controller;
class AppearanceController extends Controller {

    public function index(){
		//联系方式调用
		//echo T();
		$this->display();
    }
	public function appearance(){
		//获取网页表单
		echo $map['members_id'] = trim(I('members_id'));
		echo $data['weight'] = trim(I('weight'));
		echo $data['size'] = trim(I('size'));
		echo $data['health'] = trim((I('health')));
		echo $data['evaluation'] = trim(I('evaluation'));
		echo $data['clothes'] = trim(I('clothes'));
		echo $data['disposition'] = trim(I('disposition'));
		echo $data['temper'] = trim(I('temper'));
		echo $data['modify'] = date('Y-m-d  h:i:sa');

		//实例化appearance对象
		$appearance = M('appearance');
		//根据条件跟新记录
		$appearance->where($map)->data($data)->save();
	}
}
