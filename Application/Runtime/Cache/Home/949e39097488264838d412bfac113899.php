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
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Home/Home/index" role="button">个人主页</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="#" role="button">缘分搜索</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="#" role="button">线下活动</a></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Information/Information/index" role="button">修改资料</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="#" role="button">使用帮助</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Login/Login/index" role="button">退出</a></div>
		</div>
	</nav>

<div class="row">
<div class = "row">
<div class = "col-md-12"><h4><p class = "text-center">修改资料</p></h4></div>

<div class = "row">
<div class = "col-md-7">
<div class = "col-md-12">&nbsp;</div>
<img src="/single_love/Application/Home/View/Personal/Personal/mode/a.jpg" alt="..." class="img-rounded"  width="100%" height="300">
</div>
<div class = "col-md-4">

<form class = "form-horizontal" action="./upload" enctype = "multipart/form-data" method="POST" enctype="multipart/form-data">

<div class = "form-group">
<label for = "inputphoto6" class = "col-md-3 control-label">头&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;像</label>
<div class = "col-md-8">
	<input type="file" class = "form-control" id = "inputphoto3" name="user_pic[]" size="30"/>
</div>
</div>

<div class = "form-group">
<label for = "inputphoto6" class = "col-md-3 control-label">生活照一</label>
<div class = "col-md-8">
 <input type="file" class = "form-control" id = "inpautphoto5" name="user_pic[]" size="30"/>
</div>
</div>

<div class = "form-group">
 <label for = "inputphoto6" class = "col-md-3 control-label">生活照二</label>
 <div class = "col-md-8">
    <input type="file" class = "form-control" id = "inputaphoton" name="user_pic[]" size="30"/>
 </div>
 </div>


<div class = "form-group">
 <label for = "inputphoto6" class = "col-md-3 control-label">生活照三</label>
  <div class = "col-md-8">
     <input type="file" class = "form-control" id = "inputphoatos3" name="user_pic[]" size="30"/>
 </div>
 </div>


<div class = "form-group">
  <label for = "inputphoto6" class = "col-md-3 control-label">生活照四</label>
  <div class = "col-md-8">
      <input type="file" class = "form-control" id = "inputphsaoto3" name="user_pic[]" size="30"/>
 </div>
 </div>


<div class = "form-group">
  <label for = "inputphoto6" class = "col-md-3 control-label">生活照五</label>
  <div class = "col-md-8">
      <input type="file" class = "form-control" id = "inputphadoto3" name="user_pic[]" size="30"/>
  </div>
  </div>


<div class = "form-group">
 <label for = "inputphoto6" class = "col-md-3 control-label">生活照六</label>
  <div class = "col-md-8">
      <input type="file" class = "form-control" id = "inputphotfoa3" name="user_pic[]" size="30"/>
  </div>
 </div>


<div class = "col-md-12">
	<p class = "text-center"><button type = "submit" class = "btn btn-primary">保存并预览</button></p>
</div>

</form>
</div>
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">&nbsp;</div>
 <div class = "col-md-12"><p class = "text-center">版权所有:西南民族大学 李正祥</p></div>
</div>
</div>


</div>
</div>
 </body>
</html>