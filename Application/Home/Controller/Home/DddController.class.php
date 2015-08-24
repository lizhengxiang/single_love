<?php
namespace Home\Controller\Home;
use Think\Controller;
require_once 'DefController.class.php';
require 'StackController.class.php';
class DddController extends Controller {

	public $data;
	public $eab = 0;
   public function index(){
		//$end = 0;
		dump( $this->$eab);
		//获取自己的帐号
		$list = array(
        	array('id'=>1, 'fid'=>0, 'title' => '中国'), 
        	array('id'=>2, 'fid'=>1, 'title' => '江苏'),
        	array('id'=>3, 'fid'=>1, 'title' => '安徽'),
        	array('id'=>4, 'fid'=>8, 'title' => '江阴'),
        	array('id'=>5, 'fid'=>3, 'title' => '芜湖'),
        	array('id'=>6, 'fid'=>3, 'title' => '合肥'),
        	array('id'=>7, 'fid'=>3, 'title' => '蚌埠'),
        	array('id'=>8, 'fid'=>2, 'title' => '无锡')
    	);
		$abc = new DefController();
		foreach(array_keys( $list ) as $key ){
    		if( $list[$key]['fid'] == 0 ){
            	continue;
       		}
       		if($abc->putChild( $list , $list[$key] )){
				//dump($list[$key]);
            	unset( $list[$key]);
       		}
		}
		dump($list);
	}
}

