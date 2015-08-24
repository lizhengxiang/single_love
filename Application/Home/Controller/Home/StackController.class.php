<?php
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
?>
