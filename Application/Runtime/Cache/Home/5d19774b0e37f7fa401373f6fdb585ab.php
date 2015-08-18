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
<table class="table table-bordered">
<tr class = "success">
<td>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="row">
<div class="col-md-12">
<table class="table table-bordered">
<tr class = "default">
<td>
<div class="row">
<div class="col-md-3"></div>
<div>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">收件箱(未读)</a></li>
<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">收件箱(已读)</a></li>
<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">发件箱</a></li>
<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">系统邮件</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="home">
<div class="row">	
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="row">
<div class="col-md-12">
<!--未读收件箱内容-->
</div>
</div>
</div>
</div>
</div>
<div role="tabpanel" class="tab-pane" id="profile">
111
</div>
<div role="tabpanel" class="tab-pane" id="messages">

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="row">
<div class="col-md-12"> 

<?php $__FOR_START_1917900138__=0;$__FOR_END_1917900138__=$send['count'];for($i=$__FOR_START_1917900138__;$i < $__FOR_END_1917900138__;$i+=1){ ?><fieldset>
<h4>ID:<?php echo ($send["email"][$i]["members_id_b"]); ?></h4
<h4>发送时间:<?php echo ($send["email"][$i]["time_a"]); ?></h4>
<?php echo ($send["photo"][$i]["head_ptoto"]); ?>
<h4>对方:
<?php if($send['email'][$i]['state']): ?>已读
	<?php else: ?>未读<?php endif; ?>
</h4>
<a href="https://localhost/single_love/index.php/Home/Email/Send/index/userid/<?php echo ($send["email"][$i]["members_id_b"]); ?>/id/<?php echo ($send["email"][$i]["id"]); ?>"><    button type="button"><h4>查看邮件</h4></button></a>
</fieldset><?php } ?>
</div>
</div>
</div>
</div>


</div>

<div role="tabpanel" class="tab-pane" id="settings">...7</div>
</div>

</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</div>
<div class="col-md-1"></div>
</div>
</td>
</tr>
</table>
</div>
</div>

	
</div>
 </body>
</html>