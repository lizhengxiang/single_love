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
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user_id); ?>" role="button">个人主页</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Social/Home/index" role="button">社交主页</a></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Edge/Edge/index" role="button">缘分搜索</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Book/ShowBook/index" role="button">二手市场</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Login/Login/index" role="button">退出</a></div>
		</div>
	</nav>

<div class="row">
<div class="col-md-12">
<!--<table class="table table-bordered">
<tr class = "default">
<td>!-->
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="row">
<div class="col-md-12">
<!--<table class="table table-bordered">
<tr class = "default">
<td>-->
<div class="row">
<div class="col-md-3"></div>
<div>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
 <?php if($tag == 1): ?><li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">收件箱(未读)</a></li>
<?php else: ?>
<li role="presentation" ><a href="#home" aria-controls="home" role="tab" data-toggle="tab">收件箱(未读)</a></li><?php endif; ?>
<?php if($tag == 2): ?><li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">收件箱(已读)</a></li>
<?php else: ?>
<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">收件箱(已读)</a></li><?php endif; ?>
<?php if($tag == 3): ?><li role="presentation" class="active"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">已发邮件</a></li>
<?php else: ?>
<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">已发邮件</a></li><?php endif; ?>
<?php if($tag == 4): ?><li role="presentation" class="active"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">系统邮件</a></li>
<?php else: ?>
<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">系统邮件</a></li><?php endif; ?>
</ul>

<!-- Tab panes -->
<div class="tab-content">
<?php if($tag == 1): ?><div role="tabpanel" class="tab-pane active" id="home">
<?php else: ?>
<div role="tabpanel" class="tab-pane" id="home"><?php endif; ?>
<div class="row">	
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="row">
<div class="col-md-12">
<!--未读收件箱内容-->
<?php $__FOR_START_724477504__=0;$__FOR_END_724477504__=$count['count'];for($i=$__FOR_START_724477504__;$i < $__FOR_END_724477504__;$i+=1){ ?><div class="row">
<div class="col-md-3">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($count["email"][$i]["members_id_a"]); ?>"><img src="<?php echo ($count["photo"][$i]["head_ptoto"]); ?>" alt="..." class="img-rounded"  width="100%" height="100"></a>
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
<div class = "row">
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">
		ID:<?php echo ($count["email"][$i]["members_id_a"]); ?>
	</div>
	<div class="col-md-12">
		发送时间:<?php echo ($count["email"][$i]["time_a"]); ?>
	</div>
	<div class="col-md-12">
		未读
	</div>
</div>
</div>
<div class="col-md-4">
<div class = "row">
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-6">
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal2<?php echo ($i); ?>" data-whatever="@mdo">看信</button>
</div>
<div class="col-md-6">
<a class="btn btn-warning" href="#" role="button">删除</a>
</div>
</div>
<div class="modal fade" id="exampleModal2<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">查看信件</h4>
      </div>
		<div class = "row">
			<div class="col-md-12">&nbsp;</div>
			<div class="col-md-12">ID:<?php echo ($count["email"][$i]["members_id_b"]); ?></div>
			<div class="col-md-12">发送时间:<?php echo ($count["email"][$i]["time_a"]); ?></div>
			<div class="col-md-12">正文:</div>
			<div class="col-md-12">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($count["email"][$i]["content"]); ?></p>
			</div>
		</div>
      <div class="modal-footer">
		<a class="btn btn-info" href="https://localhost/single_love/index.php/Home/Email/reademail/index/userid/<?php echo ($count["email"][$i]["members_id_a"]); ?>/id/<?php echo ($count["email"][$i]["id"]); ?>" role="button">确认已读</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div><?php } ?>


</div>
</div>
</div>
</div>
</div>
<?php if($tag == 3): ?><div role="tabpanel" class="tab-pane active" id="messages">
<?php else: ?>
<div role="tabpanel" class="tab-pane" id="messages"><?php endif; ?>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="row">
<div class="col-md-12"> 

<?php $__FOR_START_2056629404__=0;$__FOR_END_2056629404__=$send['count'];for($i=$__FOR_START_2056629404__;$i < $__FOR_END_2056629404__;$i+=1){ ?><div class="row">
<div class="col-md-3">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($send["email"][$i]["members_id_b"]); ?>"><img src="<?php echo ($send["photo"][$i]["head_ptoto"]); ?>" alt="..." class="img-rounded"  width="100%" height="100"></a>
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
<div class = "row">
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">
		ID:<?php echo ($send["email"][$i]["members_id_b"]); ?>
	</div>
	<div class="col-md-12">
		发送时间:<?php echo ($send["email"][$i]["time_a"]); ?>
	</div>
	<div class="col-md-12">
		对方:
		<?php if($send['email'][$i]['state']): ?>已读
		<?php else: ?>未读<?php endif; ?>
	</div>
</div>
</div>
<div class="col-md-4">
<div class = "row">
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-6">
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal1<?php echo ($i); ?>" data-whatever="@mdo">看信</button>
</div>
<div class="col-md-6">

<div class = "row">
<form action="/single_love/index.php/Home/Email/Delete/index" enctype = "multipart/form-data" method="POST">
<div class="row">
<div class="col-md-1">
<input type="text" name="emailid" value = <?php echo ($send["email"][$i]["id"]); ?> style = "display:none;">
</div>
<div class = "col-md-11">
<button type = "submit" class="btn btn-warning">删除</button>
</div>
</div>
</form>
</div>

</div>
</div>
<div class="modal fade" id="exampleModal1<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">查看信件</h4>
      </div>
		<div class = "row">
			<div class="col-md-12">&nbsp;</div>
			<div class="col-md-12">ID:<?php echo ($send["email"][$i]["members_id_b"]); ?></div>
			<div class="col-md-12">发送时间:<?php echo ($send["email"][$i]["time_a"]); ?></div>
			<div class="col-md-12">正文:</div>
			<div class="col-md-12">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($send["email"][$i]["content"]); ?></p>
			</div>
		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>
<div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div><?php } ?>
</div>
</div>
</div>
</div>

</div>

<?php if($tag == 2): ?><div role="tabpanel" class="tab-pane active" id="profile">
<?php else: ?>
<div role="tabpanel" class="tab-pane" id="profile"><?php endif; ?>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="row">
<div class="col-md-12"> 
<?php $__FOR_START_1641264875__=0;$__FOR_END_1641264875__=$read['count'];for($i=$__FOR_START_1641264875__;$i < $__FOR_END_1641264875__;$i+=1){ ?><div class="row">
<div class="col-md-3">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($read["email"][$i]["members_id_a"]); ?>"><img src="<?php echo ($read["photo"][$i]["head_ptoto"]); ?>" alt="..." class="img-rounded"  width="100%" height="100"></a>
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
<div class = "row">
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">
		ID:<?php echo ($read["email"][$i]["members_id_a"]); ?>
	</div>
	<div class="col-md-12">
		读信时间:<?php echo ($read["email"][$i]["time_b"]); ?>
	</div>
	<div class="col-md-12">
	</div>
</div>
</div>
<div class="col-md-4">
<div class = "row">
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-6">
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal<?php echo ($i); ?>" data-whatever="@mdo">看信</button>
</div>
<div class="col-md-6">


<div class = "row">
<form action="/single_love/index.php/Home/Email/Deleteemail/index" enctype = "multipart/form-data" method="POST">
<div class="row">
<div class="col-md-1">
<input type="text" name="emailid" value = <?php echo ($read["email"][$i]["id"]); ?> style = "display:none;">
</div>
<div class = "col-md-11">
<button type = "submit" class="btn btn-warning">删除</button>
</div>
</div>
</form>
</div>


</div>
</div>
<div class="modal fade" id="exampleModal<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">查看信件</h4>
      </div>
		<div class = "row">
			<div class="col-md-12">&nbsp;</div>
			<div class="col-md-12">ID:<?php echo ($read["email"][$i]["members_id_a"]); ?></div>
			<div class="col-md-12">读信时间:<?php echo ($read["email"][$i]["time_b"]); ?></div>
			<div class="col-md-12">正文:</div>
			<div class="col-md-12">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($read["email"][$i]["content"]); ?></p>
			</div>
		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div><?php } ?>
</div>
</div>
</div>
</div>

</div>
<?php if($tag == 4): ?><div role="tabpanel" class="tab-pane active" id="settings">
<?php else: ?>
<div role="tabpanel" class="tab-pane " id="settings"><?php endif; ?>
...7</div>
</div>

</div>
</div>
<!--</td>
</tr>
</table>-->
</div>
</div>
</div>
<div class="col-md-1"></div>
</div>
<!--</td>
</tr>
</table>-->
</div>
</div>

	
</div>
 </body>
</html>