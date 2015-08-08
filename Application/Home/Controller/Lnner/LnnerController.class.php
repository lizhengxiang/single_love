<?php

namespace Home\Controller\Lnner;
//import("ORG.Net.UploadFile");
use Think\Controller;
use Think\Upload;
class LnnerController extends Controller {

    public function index(){
		//调用内心独白页面
		//echo T();
		$this->display();
    }
	public function lnner(){
		//获取相应内容
		$map['members_id'] = I('id');
		$data['lnner'] = trim(I('lnner'));
		$data['modify'] = date('Y-m-d h:i:sa');
		$data['state'] = 0;
		//实例化对象
		$lnner = M('lnner');
		//根据条件修改数据
		$lnner->where($map)->data($data)->save();
	}

}
