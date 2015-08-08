<?php
namespace Home\Controller\Love;
use Think\Controller;
class LoveController extends Controller {
    public function index(){
		//调用生活方式页面
		//echo T();
		$this->display();
    }

	public function love(){
		//获取表單提交的基本信息
		$map['members_id']=I('members_id');
		$data['sports'] = I('sports');
		$data['food'] = I('food');
		$data['book'] = I('book');
		$data['movie'] = I('movie');
		$data['tv'] = I('tv');
		$data['play'] = I('play');
		$data['hobby'] = I('hobby');
		$data['tourism'] = I('tourism');
		$data['modify'] = date("y-m-d h:i:sa");
		//实例化love对象
		$love = M('love');
		//根据条件更新记录
		$love->where($map)->data($data)->save();
		
	}
}
