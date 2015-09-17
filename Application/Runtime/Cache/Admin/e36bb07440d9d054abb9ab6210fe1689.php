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

<div class="col-md-12">&nbsp;</div>
<div class = "col-md-12"><h1><p class = "text-center">欢迎您</p></h1></div>
<div class="col-md-12">&nbsp;</div>

<div class="row">
<div class="col-md-12">
<!--<table class="table table-bordered">
<tr class = "default">
<td>!-->
<div class="row">

<div class="col-md-7">
<div class="row">
<div class="col-md-12">
<!--<table class="table table-bordered">
<tr class = "default">
<td>-->

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
 
<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">收件箱(未读)</a></li>
<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">收件箱(已读)</a></li>
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
<?php $__FOR_START_1694740695__=0;$__FOR_END_1694740695__=$count['count'];for($i=$__FOR_START_1694740695__;$i < $__FOR_END_1694740695__;$i+=1){ ?><div class="row">
<div class="col-md-3">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($count["email"][$i]["members_id_a"]); ?>"><img src="<?php echo ($count["photo"][$i]["head_ptoto"]); ?>" alt="..." class="img-rounded"  width="100%" height="100"></a>
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
<div class = "row">
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">
		举报人:<?php echo ($count["email"][$i]["members_id_a"]); ?>
	</div>
	<div class="col-md-12">
		被举报人:<?php echo ($count["email"][$i]["members_id_b"]); ?>
	</div>
	<div class="col-md-12">
		举报时间:<?php echo ($count["email"][$i]["time"]); ?>
	</div>
	<div class="col-md-12">
		未处理
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
			<div class="col-md-12">举报人:<?php echo ($count["email"][$i]["members_id_a"]); ?></div>
			<div class="col-md-12">被举报人:<?php echo ($count["email"][$i]["members_id_b"]); ?></div>
			<div class="col-md-12">举报时间:<?php echo ($count["email"][$i]["time"]); ?></div>
			<div class="col-md-12">举报内容:</div>
			<div class="col-md-12">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($count["email"][$i]["content"]); ?></p>
			</div>
		</div>
      <div class="modal-footer">
		<a class="btn btn-info" href="https://localhost/single_love/index.php/Admin/Home/reademail/index/userid/<?php echo ($count["email"][$i]["members_id_a"]); ?>/id/<?php echo ($count["email"][$i]["id"]); ?>" role="button">确认已读</a>
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



<div role="tabpanel" class="tab-pane" id="profile">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="row">
<div class="col-md-12"> 
<?php $__FOR_START_2014207984__=0;$__FOR_END_2014207984__=$read['count'];for($i=$__FOR_START_2014207984__;$i < $__FOR_END_2014207984__;$i+=1){ ?><div class="row">
<div class="col-md-3">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($read["email"][$i]["members_id_a"]); ?>"><img src="<?php echo ($read["photo"][$i]["head_ptoto"]); ?>" alt="..." class="img-rounded"  width="100%" height="100"></a>
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
<div class = "row">
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">
		举报人:<?php echo ($read["email"][$i]["members_id_a"]); ?>
	</div>
	<div class="col-md-12">
		 被举报人:<?php echo ($read["email"][$i]["members_id_b"]); ?>
	</div>
	<div class="col-md-12">
		举报时间:<?php echo ($read["email"][$i]["time"]); ?>
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
<form action="/single_love/index.php/Admin/Home/Deleteemail/index" enctype = "multipart/form-data" method="POST">
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
			<div class="col-md-12">举报人:<?php echo ($read["email"][$i]["members_id_a"]); ?></div>
             <div class="col-md-12">被举报人:<?php echo ($read["email"][$i]["members_id_b"]); ?></div>
              <div class="col-md-12">举报时间:<?php echo ($read["email"][$i]["time"]); ?></div>
             <div class="col-md-12">举报内容:</div>

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
</div>
</div>
</div>
</div>



<div class="col-md-4">
<div class = "row">
<div class="col-md-12">
<form class="form-horizontal" action="/single_love/index.php/Admin/Data/Data/index" method = "post">
<div class="col-md-12">
<input type="text" class="form-control input-lg" name="username" id="inputEmail3" placeholder="用户名ID" placeholder = ".input-lg" required>
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-3"></div>
<div class="col-md-6">
<button type="submit" class="btn btn-info input-lg">特定搜索</button>
</div>
<div class="col-md-3"></div>
</form>
</div>
</div>
<!--</td>
</tr>
</table>-->
</div>
</div>
	
</div>
 </body>
</html>