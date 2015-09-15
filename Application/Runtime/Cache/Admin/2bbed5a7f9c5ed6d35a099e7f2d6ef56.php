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
<div class = "container">
<table class = "table">
<tr>
<td>
<div class = "row">
<div class = "col-md-12">
&nbsp;
</div>
<div class = "col-md-12">
&nbsp;
</div>
<div class = "col-md-12">
&nbsp;
</div>
<div class = "col-md-12">
<div class = "row">
<div class = "col-md-7">
<img src="/single_love/Application/Admin/View/mode/login.jpg" alt="..." class="img-rounded"  width="100%" height="600"/>
</div>

<div class = "col-md-4">
<div class = "row">
<div class = "col-md-12">
&nbsp;
</div>
</div>
<div class = "row">
<div class = "col-md-12">
&nbsp;
</div>
</div>
<div class = "row">
<div class = "col-md-12">
&nbsp;
</div>
</div>
<table class = "table">
<tr class = "warning">
<td>
<div class = "row">
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12"><h1><strong><p class = "text-center">she jiao 520</p></strong></h1></div>

<form class="form-horizontal" action="login" method = "post">
  <div class="form-group">
	<div class="col-md-1"></div>
    <label for="inputEmail3" class="col-md-1 control-label"></label>
    <div class="col-md-8">
      <input type="text" class="form-control" name="username" id="inputEmail3" placeholder="用户名" class = "inupt-xlarge" required>
    </div>
  </div>
  <div class="form-group">
	<div class="col-md-1"></div>
    <label for="inputPassword3" class="col-md-1 control-label"></label>
    <div class="col-md-8">
      <input type="text" class="form-control" name="password" id="inputPassword3" placeholder="密码" class = "inupt-xlarge" required>
    </div>
  </div>

<div class="form-group">
 <div class="col-md-1"></div>
   <label for="inputPassword3" class="col-md-1 control-label"></label>
 	<div class="col-md-3">
 		<input type="text" class="form-control" id="inputPassword3" name="verify" placeholder="验证码">
 	</div>
	<div class="col-md-6">
	<a class="btn btn-sucess" href = "https://localhost/single_love/index.php/Admin/Login/Login/index"> 
	<img src="<?php echo u('Home/Login/Test/verify_c');?>" width="100%" height="70"></a>
	</div>
 </div>

  <div class="form-group">
	<div class="col-md-2"></div>
    <div class="col-md-3">
      <button type="submit" class="btn btn-info">登录</button>
    </div>
</div>
</form>
<div class = "row">
<div class = "col-md-12">&nbsp;</div>
</div>

<div class = "row">
<div class = "col-md-12">&nbsp;</div>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</td>
</tr>
</table>
</div>
 </body>
</html>