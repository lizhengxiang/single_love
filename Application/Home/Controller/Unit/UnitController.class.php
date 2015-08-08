<?php

namespace Home\Controller\Unit;
use Think\Controller;
class UnitController extends Controller {

    public function index(){
		//联系方式调用
		//echo T();
		$this->display();
    }
	public function unit(){
		//获取网页表单
		echo $map['members_id'] = trim(I('members_id'));
		echo $data['unit_type'] = trim(I('unit_type'));
		echo $data['professional'] = trim(I('professional'));
		echo $data['work'] = trim((I('work')));
		echo $data['move'] = trim(I('move'));
		echo $data['family'] = trim(I('family'));
		echo $data['school'] = trim(I('school'));
		echo $data['major'] = trim(I('major'));
		echo $data['language'] = trim(I('language'));
		echo $data['modify'] = date('Y-m-d  h:i:sa');
		//实例化unit对象
		$unit = M('unit');
		//根据条件跟新记录
		$unit->where($map)->data($data)->save();
	}
}
