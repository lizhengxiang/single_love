<?php
namespace Home\Controller\Home;
use Think\Controller;
require_once 'DefController.class.php';

class data{
	//数据
	private $data;
	
	public function __construct($data){
		$this->data=$data;
		//echo $data.":哥入栈了！<br>";
	}
	
	public function getData(){
		return $this->data;
	}
	public function __destruct(){
		//echo $this->data."：哥走了！<br>";
	}
}
class stack{
	private $size;
	private $top;
	private $stack=array();
	public function __construct($size){
		$this->Init_Stack($size);
	}
	//初始化栈
	public function Init_Stack($size){
		$this->size=$size;
		$this->top=-1;
	}
	//判断栈是否为空
	public function Empty_Stack(){
		if($this->top==-1)return 1;
		else return 0;
	}
	//判断栈是否已满
	public function Full_Stack(){
		if($this->top<$this->size-1)return 0;
		else return 1;
	}
	//入栈
	public function Push_Stack($data){
		if($this->Full_Stack())echo "栈满了<br />";
		else $this->stack[++$this->top]=new data($data);
		//echo $this->top;
	}
	//出栈
	public function Pop_Stack(){
		if($this->Empty_Stack())echo "栈空着呢<br />";
		else unset($this->stack[$this->top--]);
	}
	//读取栈顶元素
	public function Top_Stack(){
		return $this->Empty_Stack()?"":$this->stack[$this->top]->getData();
	}
	
}

class AbbController extends Controller {
   public function index(){
		$end = 0;
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
		$stack = new stack(20);	
		while(1){
			
		}
	}
}

