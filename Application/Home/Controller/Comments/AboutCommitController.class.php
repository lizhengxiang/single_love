<?php

namespace Home\Controller\Comments;
use Think\Controller;
require_once 'DefController.class.php';
class data{
	//数据
	private $data;
	public function __construct($data){
		$this->data=$data;
	}
	public function getData(){
		return $this->data;
	}
	public function __destruct(){
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

class  AboutCommitController extends Controller {
	public function index($aboutid){
		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				$think_comments = M('comments');
				$tag['aboutid'] = $aboutid;
 				//根据帖子的id取出帖子评论
 				$commit['about'] = $think_comments->order('time desc')->where($tag)->select();
 				$commit['count'] = $think_comments->where($tag)->count();
				//dump($commit['about']);
				//把帖子id等部分内容放到数组里进行无限极分类
				for($i = 0; $i < $commit['count']; $i++){
					$list[$i]['id'] = $commit['about'][$i]['id'];
					$list[$i]['fid'] = $commit['about'][$i]['contentid'];
					$list[$i]['title'] = $commit['about'][$i]['members_id'];
				}
				//dump($list);
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
				//利用栈遍历森林把分类后的结果输出到一维数组.一边传到前台
				//dump($list);

				//装分类过后的id
				$commit_id = array();
				$commit_a = array();
				$number = 0;
				$stack = new stack(20);
				$sum = count($list);
				foreach(array_keys($list) as $h){
					//上面的for循环是取出索引下标,一位这儿打印出来的下标不是安顺序打印出来的,
					//他是安,原来的索引标号答应出来的所以没办法用123456这样的普通循环法
					//echo "<br>";
					$listt = $list[$h];	
					$i = count($listt['child']);
					//这儿打印出他的标题
					//echo $listt['title'];
					$commit_id[$number++] = $listt['id'];
					//若他没有孩子就没有必要往下走了
					if($i == 0){
						continue;
					}
					//孩子按逆序入栈,这是为了安顺序打印出来(栈的特性)
					while(--$i >= 0){
						$stack->Push_Stack($listt['child'][$i]);
					}
					//取出栈顶元素
					$listt = $stack->Top_Stack();
					//释放栈顶元素
					$stack->Pop_Stack();
	
					while(1){
						//统计有没有孩子,打印标题
						$i = count($listt['child']);
						//echo $listt['title'];
						$commit_id[$number++] = $listt['id'];
						if($i == 0){
						$listt = $stack->Top_Stack();
						//这一句就说明了栈为空,栈为空就直接跳出,这个分支的所有操作
						if(!$listt)
							break;
						$stack->Pop_Stack();
						//若栈不空就继续取出
						continue;
						}
						//孩子入栈
						while(--$i >= 0){
							$stack->Push_Stack($listt['child'][$i]);
						}
						//孩子出栈
						$listt = $stack->Top_Stack();
						if(!$listt)
							break;
						//释放孩子
						$stack->Pop_Stack();
					}

				}
				//dump($commit_id);
				for($m = 0; $m < $commit['count']; $m++){
					$commitid = $commit_id[$m];
					for($n = 0; $n < $commit['count']; $n++){
						if($commitid == $commit['about'][$n]['id']){
							$commit_a[$m] = $commit['about'][$n];
							break;
						}

					}
				}
				$commit['about'] = $commit_a;
				//获取用户头像及照片
                $photo1 = M('photo');
				for($p = 0; $p < $commit['count']; $p++){
                	//根据id取出照片
                	$map_head['members_id'] = $commit['about'][$p]['members_id'];
                	$commit['head_a'][$p] = $photo1->field('head_ptoto')->where($map_head)->find();
				}
				//dump($commit['head_a']);

				return $commit;
			}
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}					
	}
}
