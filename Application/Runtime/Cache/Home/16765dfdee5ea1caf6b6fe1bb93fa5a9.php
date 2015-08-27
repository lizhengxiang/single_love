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
<div class="col-md-12">
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">
<form class="form-horizontal" action="forgot" method = "post">
<div class = "row">
<div class = "col-md-4"></div>
<div class = "col-md-4">
<p class = "text-center"><h3>密码修改成功后,请您重新登录</h3></p>
</div>
<div class = "col-md-4"></div>
</div>
<div class = "col-md-12">&nbsp;</div>

<div class = "row">
<div class = "col-md-4"></div>
<div class = "col-md-4">
<input type="password" class="form-control input-lg" name="password" id="inputEmail3" placeholder="旧密码" required>
</div>
<div class = "col-md-4"></div>
</div>
<div class = "col-md-12">&nbsp;</div>

<div class = "row">
<div class = "col-md-4"></div>
<div class = "col-md-4">
<input id = "pwd" type="password" class="form-control input-lg" name="pass_1" id="inputEmail3" placeholder="新密码"  required onchange = "checkPasswords()">
</div>
<div class = "col-md-4"></div>
</div>
<div class = "col-md-12">&nbsp;</div>
<div class = "row">
<div class = "col-md-4"></div>
<div class = "col-md-4">
<input id = "pwd1" type="password" class="form-control input-lg" name="pass_2" id="inputEmail3" placeholder="确认密码"  required onchange = "checkPasswords()">
</div>
<div class = "col-md-4"></div>
</div>
<div class = "col-md-12">&nbsp;</div>

<div class = "row">
<div class = "col-md-4"></div>
<div class = "col-md-4">
<p class = "text-center"><button type = "submit" class = "btn btn-primary btn-lg">完成</button></p>
</div>
<div class = "col-md-4"></div>
</div>
</form>
</div>



</div>
</div>

<script>
        function checkPasswords() {
            var passl = document.getElementById("pwd");
            var pass2 = document.getElementById("pwd1");
            if (passl.value != pass2.value)
                passl.setCustomValidity("两次密码必须输入一致！");
            else
                passl.setCustomValidity('');
        }

        function check() {
            document.getElementById('ok').disabled = 'disabled';
        }
</script>


</div>
 </body>
</html>