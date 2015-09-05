<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/single_love/Application/Home/View/Personal/Personal/mode/css/bootstrap.min.css" rel="stylesheet">
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  </head>
  <body>
<div class="container">
	<div class="row">
		<table class="table">
		</table>
	</div>
	<div class="row">
		<div class="col-md-3"><img src="/single_love/Application/Home/View/Personal/Personal/mode/a.jpg" alt="..." class="img-rounded"  width="100%" height="100"></div>
		<div class="col-md-6"><img src="/single_love/Application/Home/View/Personal/Personal/mode/b.jpg" alt="..." class="img-rounded"  width="100%" height="100"></div>
		<div class="col-md-3"><img src="/single_love/Application/Home/View/Personal/Personal/mode/c.jpg" alt="..." class="img-rounded"  width="100%" height="100"></div>
	</div>
	
	<div class="row">
		<table class="table">
		</table>
	</div>
	<nav class="navbar navbar-inverse container-fluid">
		<div class="row">
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Home/Home/index" role="button">个人中心</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($id); ?>" role="button">我的主页</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Social/Home/index" role="button">社交主页</a></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Edge/Edge/index" role="button">緣分搜索</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="#" role="button">二手市场</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Login/Login/index" role="button">退出</a></div>
		</div>
	</nav>
<div class="row">
	<div class="col-md-12">
		<div class = "col-md-7">
		<div class = "col-md-12">&nbsp;</div>
		<div class = "col-md-12">&nbsp;</div>
		<div class = "col-md-12">&nbsp;</div>
		<img src="/single_love/Application/Home/View/Personal/Personal/mode/a.jpg" alt="..." class="img-rounded"  width="100%" height="300">
		</div>
  					<div class="col-md-5">
							
<form class = "form-horizontal" action="book" enctype = "multipart/form-data" method="POST">
<div class = "form-group">
<label for = "inputphoto6" class = "col-md-3 control-label">学校</label>
<div class = "col-md-8">
<select class="form-control " name = "school">
  <option>西南民族大学</option>
  <option>成都信息工程大学</option>
  <option>四川大学</option>
  <option>电子科技大学</option>
  <option>西南财经大学</option>
</select>
</div>
</div>


<div class = "form-group">
<label for = "inputphoto6" class = "col-md-3 control-label">分类</label>
<div class = "col-md-8">
<select class="form-control " name = "type">
<option>小说</option>
<option>法学</option>
<option>历史</option>
<option>科技</option>
<option>藏学</option>
<option>化学</option>
<option>医药</option>
<option>艺术</option>
<option>数学</option>
<option>心理学</option>
<option>水利水电</option>
<option>社会科学</option>
<option>经济管理</option>
<option>青春动漫</option>
<option>电气工程</option>
<option>建筑与环境</option>
<option>文学与新闻</option>
<option>励志与成功</option>
<option>英语与其他外语</option>
<option>计算机与互联网</option>

</select>
</div>
</div>

<div class = "form-group">
<label for = "inputphoto6" class = "col-md-3 control-label">书名</label>
<div class = "col-md-8">
<input type="text" class="form-control " name="bookname" id="inputEmail3" placeholder="书名" required>
</div>
</div>

<div class = "form-group">
<label for = "inputphoto6" class = "col-md-3 control-label">作者</label>
<div class = "col-md-8">
<input type="text" class="form-control " name="author" id="inputEmail3" placeholder="作者" required>
</div>
</div>

<div class = "form-group">
<label for = "inputphoto6" class = "col-md-3 control-label">出版社</label>
<div class = "col-md-8">
<input type="text" class="form-control " name="press" id="inputEmail3" placeholder="出版社" required>
</div>
</div>

<div class = "form-group">
<label for = "inputphoto6" class = "col-md-3 control-label">數量</label>
<div class = "col-md-8">
<select class="form-control" name = "number">
<?php $__FOR_START_1759111418__=1;$__FOR_END_1759111418__=5;for($i=$__FOR_START_1759111418__;$i < $__FOR_END_1759111418__;$i+=1){ ?><option><?php echo ($i); ?></option><?php } ?>
</select>
</div>
</div>

<div class = "form-group">
<label for = "inputphoto6" class = "col-md-3 control-label">价格</label>
<div class = "col-md-8">
<select class="form-control " name = "price">
<?php $__FOR_START_1686434962__=1;$__FOR_END_1686434962__=50;for($i=$__FOR_START_1686434962__;$i < $__FOR_END_1686434962__;$i+=1){ ?><option><?php echo ($i); ?></option><?php } ?>
</select>
</div>
</div>

<div class = "form-group">
<label for = "inputphoto6" class = "col-md-3 control-label">图片</label>
<div class = "col-md-8">


							<div class="row">
						   <div class="col-md-12">
											<div class="row">
												<div class="col-md-12">
												<div class="col-md-12">
													<div class="panel-group" id="accordion6" role="tablist" aria-multiselectable="true">
  													<div class="panel panel-default">
    												<div class="panel-heading" role="tab" id="headingOne6">
      												<h4 class="panel-title">
       											<a role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapseOne6" aria-expanded="true" aria-controls="collapseOne"><button type="button" class="btn btn-default btn-block">上传图片</button></a>
      												</h4>
    												</div>
    												<div id="collapseOne6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      												<div class="panel-body">
													<div id="content">

													<fieldset>
 	 												<label for="user_pic">图片一:</label>
 	 												<input type="file" name="user_pic[]" size="30" /><br />
 													</fieldset>
 													<br />

													<fieldset>
        											<label for="user_pic">图片二:</label> 
        											<input type="file" name="user_pic[]" size="30" /><br />
      												</fieldset>
      												<br />
													<fieldset>
        											<label for="user_pic">图片三:</label> 
        											<input type="file" name="user_pic[]" size="30" /><br />
      												</fieldset>

													</div>
      												</div>
    												</div>
  													</div>
													</div>
													</div>
													</div></div>
													<div class="col-md-12">
													<div class = "row">
													<div class="col-md-12">
													<p class = "text-center"><button type = "submit" class = "btn btn-info">添加图书</button></p>
													<div>
													</div>
													</div>
													
												</div>
												</div>
											</div>
								</div>
								</div>
								</form>
	</div>
</div>
</div>
	<div class = "col-md-12"><p class = "text-center">版权所有:西南民族大学 李正祥</p></div>
	<div class = "col-md-12"><p class = "text-center">联系电话:15308003217</p></div>
</div>
 </body>
</html>