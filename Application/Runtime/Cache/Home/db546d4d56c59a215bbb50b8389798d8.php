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
<div class="col-md-4"></div>
<div>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">我收到的礼物</a></li>
<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">我送出的礼物</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="home">

<?php $__FOR_START_312461657__=0;$__FOR_END_312461657__=$count;for($i=$__FOR_START_312461657__;$i < $__FOR_END_312461657__;$i+=1){ ?><div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div>

<div class="row">
<div class="col-md-2">
<div class="row">

<div class="col-md-12">
<img src="<?php echo ($giftroat[$i][road]); ?>" alt="..." class="img-rounded"  width="100%" height="100"/>
</div>

</div>
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['members_id']); ?>"><p class = "text-center">赠送人:<?php echo ($user[$i]['members_id']); ?></p></a>
</div>

</div>
<div class="row">
<div class="col-md-12">
<?php echo ($gift['user'][$i]['time']); ?>
</div>
</div>

<div class = "row">
 <div class="col-md-12">
<p class = "text-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal2<?php echo ($i); ?>" data-whatever="@mdo">查看留言</button></p>
</div>
</div>
</div>

<div class="modal fade" id="exampleModal2<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">礼物</h4>
      </div>
		<div class = "row">
			<div class="col-md-12">&nbsp;</div>
			<div class="col-md-12"><img src="<?php echo ($giftroat[$i][road]); ?>" alt="..." class="img-rounded"  width="100%" height="250"/></div>
			<div class="col-md-12"><strong>时间:<?php echo ($gift['user'][$i]['time']); ?></strong></div>
			<div class="col-md-12"><strong>赠送人:<?php echo ($user[$i]['members_id']); ?></strong></div>
			<div class="col-md-12"><strong>留言:</strong></div>
			<div class="col-md-12">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo ($gift['user'][$i]['content']); ?></strong></p>
			</div>
		</div>
      <div class="modal-footer">
		<button type = "button" class = "btn btn-default" data-dismiss = "modal">关闭</button>
		<a class="btn btn-info" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['members_id']); ?>" role="button">回复礼物</a>
      </div>
    </div>
  </div>
</div>


<div class="col-md-1"></div>
<?php if($giftroat[++$i][road] != NULL): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<img src="<?php echo ($giftroat[$i][road]); ?>" alt="..." class="img-rounded"  width="100%" height="100"/>
</div>
</div>
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['members_id']); ?>"><p class = "text-center">赠送人:<?php echo ($user[$i]['members_id']); ?></p></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($gift['user'][$i]['time']); ?>
</div>
</div>

<div class = "row">
 <div class="col-md-12">
<p class = "text-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal2<?php echo ($i); ?>" data-whatever="@mdo">查看留言</button></p>
</div>
</div>
</div>
<div class="modal fade" id="exampleModal2<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">礼物</h4>
      </div>
		<div class = "row">
			<div class="col-md-12">&nbsp;</div>
			<div class="col-md-12"><img src="<?php echo ($giftroat[$i][road]); ?>" alt="..." class="img-rounded"  width="100%" height="250"/></div>
			<div class="col-md-12"><strong>时间:<?php echo ($gift['user'][$i]['time']); ?></strong></div>
			<div class="col-md-12"><strong>赠送人:<?php echo ($user[$i]['members_id']); ?></strong></div>
			<div class="col-md-12"><strong>留言:</strong></div>
			<div class="col-md-12">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo ($gift['user'][$i]['content']); ?></strong></p>
			</div>
		</div>
      <div class="modal-footer">
		<button type = "button" class = "btn btn-default" data-dismiss = "modal">关闭</button>
		<a class="btn btn-info" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['members_id']); ?>" role="button">回复礼物</a>
      </div>
    </div>
  </div>
</div><?php endif; ?>
<div class="col-md-2"></div>
<?php if($giftroat[++$i][road] != NULL): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<img src="<?php echo ($giftroat[$i][road]); ?>" alt="..." class="img-rounded"  width="100%" height="100"/>
</div>
</div>
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['members_id']); ?>"><p class = "text-center">赠送人:<?php echo ($user[$i]['members_id']); ?></p></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($gift['user'][$i]['time']); ?>
</div>
</div>

<div class = "row">
 <div class="col-md-12">
<p class = "text-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal2<?php echo ($i); ?>" data-whatever="@mdo">查看留言</button></p>
</div>
</div>
</div>
<div class="modal fade" id="exampleModal2<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">礼物</h4>
      </div>
		<div class = "row">
			<div class="col-md-12">&nbsp;</div>
			<div class="col-md-12"><img src="<?php echo ($giftroat[$i][road]); ?>" alt="..." class="img-rounded"  width="100%" height="250"/></div>
			<div class="col-md-12"><strong>时间:<?php echo ($gift['user'][$i]['time']); ?></strong></div>
			<div class="col-md-12"><strong>赠送人:<?php echo ($user[$i]['members_id']); ?></strong></div>
			<div class="col-md-12"><strong>留言:</strong></div>
			<div class="col-md-12">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo ($gift['user'][$i]['content']); ?></strong></p>
			</div>
		</div>
      <div class="modal-footer">
		<button type = "button" class = "btn btn-default" data-dismiss = "modal">关闭</button>
		<a class="btn btn-info" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['members_id']); ?>" role="button">回复礼物</a>
      </div>
    </div>
  </div>
</div><?php endif; ?>
<div class="col-md-1"></div>
<?php if($giftroat[++$i][road] != NULL): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<img src="<?php echo ($giftroat[$i][road]); ?>" alt="..." class="img-rounded"  width="100%" height="100"/>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($user[$i]['members_id']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($gift['user'][$i]['time']); ?>
</div>
</div>

<div class = "row">
 <div class="col-md-12">
<p class = "text-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal2<?php echo ($i); ?>" data-whatever="@mdo">查看留言</button></p>
</div>
</div>
</div>
<div class="modal fade" id="exampleModal2<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">礼物</h4>
      </div>
		<div class = "row">
			<div class="col-md-12">&nbsp;</div>
			<div class="col-md-12"><img src="<?php echo ($giftroat[$i][road]); ?>" alt="..." class="img-rounded"  width="100%" height="250"/></div>
			<div class="col-md-12"><strong>时间:<?php echo ($gift['user'][$i]['time']); ?></strong></div>
			<div class="col-md-12"><strong>赠送人:<?php echo ($user[$i]['members_id']); ?></strong></div>
			<div class="col-md-12"><strong>留言:</strong></div>
			<div class="col-md-12">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo ($gift['user'][$i]['content']); ?></strong></p>
			</div>
		</div>
      <div class="modal-footer">
		<button type = "button" class = "btn btn-default" data-dismiss = "modal">关闭</button>
		<a class="btn btn-info" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['members_id']); ?>" role="button">回复礼物</a>
      </div>
    </div>
  </div>
</div><?php endif; ?>
</div><?php } ?>

</div>
<div role="tabpanel" class="tab-pane" id="messages">
<?php $__FOR_START_1039471504__=0;$__FOR_END_1039471504__=$count1;for($i=$__FOR_START_1039471504__;$i < $__FOR_END_1039471504__;$i+=1){ ?><div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div>
<div class="row">
<div class="col-md-2">
<div class="row">
<div class="col-md-12">
<img src="<?php echo ($giftroat1[$i][road]); ?>" alt="..." class="img-rounded"  width="100%" height="100"/>
</div>
</div>
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user1[$i]['members_id']); ?>"><p class = "text-center">赠送人:<?php echo ($user1[$i]['members_id']); ?></p></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($gift1['user'][$i]['time']); ?>
</div>
</div>

<div class = "row">
 <div class="col-md-12">
<p class = "text-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal<?php echo ($i); ?>" data-whatever="@mdo">查看留言</button></p>
</div>
</div>
</div>
<div class="modal fade" id="exampleModal<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">礼物</h4>
      </div>
		<div class = "row">
			<div class="col-md-12">&nbsp;</div>
			<div class="col-md-12"><img src="<?php echo ($giftroat1[$i][road]); ?>" alt="..." class="img-rounded"  width="100%" height="250"/></div>
			<div class="col-md-12"><strong>时间:<?php echo ($gift1['user'][$i]['time']); ?></strong></div>
			<div class="col-md-12"><strong>赠送人:<?php echo ($user1[$i]['members_id']); ?></strong></div>
			<div class="col-md-12"><strong>留言:</strong></div>
			<div class="col-md-12">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo ($gift1['user'][$i]['content']); ?></strong></p>
			</div>
		</div>
      <div class="modal-footer">
		<button type = "button" class = "btn btn-default" data-dismiss = "modal">关闭</button>
		<a class="btn btn-info" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['members_id']); ?>" role="button">回复礼物</a>
      </div>
    </div>
  </div>
</div>


<div class="col-md-1"></div>
<?php if($giftroat1[++$i][road] != NULL): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<img src="<?php echo ($giftroat1[$i][road]); ?>" alt="..." class="img-rounded"  width="100%" height="100"/>
</div>
</div>
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user1[$i]['members_id']); ?>"><p class = "text-center">赠送人:<?php echo ($user1[$i]['members_id']); ?></p></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($gift1['user'][$i]['time']); ?>
</div>
</div>

<div class = "row">
 <div class="col-md-12">
<p class = "text-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal<?php echo ($i); ?>" data-whatever="@mdo">查看留言</button></p>
</div>
</div>
</div>
<div class="modal fade" id="exampleModal<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">礼物</h4>
      </div>
		<div class = "row">
			<div class="col-md-12">&nbsp;</div>
			<div class="col-md-12"><img src="<?php echo ($giftroat1[$i][road]); ?>" alt="..." class="img-rounded"  width="100%" height="250"/></div>
			<div class="col-md-12"><strong>时间:<?php echo ($gift1['user'][$i]['time']); ?></strong></div>
			<div class="col-md-12"><strong>赠送人:<?php echo ($user1[$i]['members_id']); ?></strong></div>
			<div class="col-md-12"><strong>留言:</strong></div>
			<div class="col-md-12">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo ($gift1['user'][$i]['content']); ?></strong></p>
			</div>
		</div>
      <div class="modal-footer">
		<button type = "button" class = "btn btn-default" data-dismiss = "modal">关闭</button>
		<a class="btn btn-info" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['members_id']); ?>" role="button">回复礼物</a>
      </div>
    </div>
  </div>
</div><?php endif; ?>
<div class="col-md-2"></div>
<?php if($giftroat1[++$i][road] != NULL): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<img src="<?php echo ($giftroat1[$i][road]); ?>" alt="..." class="img-rounded"  width="100%" height="100"/>
</div>
</div>
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user1[$i]['members_id']); ?>"><p class = "text-center">赠送人:<?php echo ($user1[$i]['members_id']); ?></p></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($gift1['user'][$i]['time']); ?>
</div>
</div>

<div class = "row">
 <div class="col-md-12">
<p class = "text-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal<?php echo ($i); ?>" data-whatever="@mdo">查看留言</button></p>
</div>
</div>
</div>
<div class="modal fade" id="exampleModal<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">礼物</h4>
      </div>
		<div class = "row">
			<div class="col-md-12">&nbsp;</div>
			<div class="col-md-12"><img src="<?php echo ($giftroat1[$i][road]); ?>" alt="..." class="img-rounded"  width="100%" height="250"/></div>
			<div class="col-md-12"><strong>时间:<?php echo ($gift1['user'][$i]['time']); ?></strong></div>
			<div class="col-md-12"><strong>赠送人:<?php echo ($user1[$i]['members_id']); ?></strong></div>
			<div class="col-md-12"><strong>留言:</strong></div>
			<div class="col-md-12">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo ($gift1['user'][$i]['content']); ?></strong></p>
			</div>
		</div>
      <div class="modal-footer">
		<button type = "button" class = "btn btn-default" data-dismiss = "modal">关闭</button>
		<a class="btn btn-info" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['members_id']); ?>" role="button">回复礼物</a>
      </div>
    </div>
  </div>
</div><?php endif; ?>
<div class="col-md-1"></div>
<?php if($giftroat1[++$i][road] != NULL): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<img src="<?php echo ($giftroat1[$i][road]); ?>" alt="..." class="img-rounded"  width="100%" height="100"/>
</div>
</div>
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user1[$i]['members_id']); ?>"><p class = "text-center">赠送人:<?php echo ($user1[$i]['members_id']); ?></p></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($gift1['user'][$i]['time']); ?>
</div>
</div>

<div class = "row">
 <div class="col-md-12">
<p class = "text-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal<?php echo ($i); ?>" data-whatever="@mdo">查看留言</button></p>
</div>
</div>
</div>
<div class="modal fade" id="exampleModal<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">礼物</h4>
      </div>
		<div class = "row">
			<div class="col-md-12">&nbsp;</div>
			<div class="col-md-12"><img src="<?php echo ($giftroat1[$i][road]); ?>" alt="..." class="img-rounded"  width="100%" height="250"/></div>
			<div class="col-md-12"><strong>时间:<?php echo ($gift1['user'][$i]['time']); ?></strong></div>
			<div class="col-md-12"><strong>赠送人:<?php echo ($user1[$i]['members_id']); ?></strong></div>
			<div class="col-md-12"><strong>留言:</strong></div>
			<div class="col-md-12">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo ($gift1['user'][$i]['content']); ?></strong></p>
			</div>
		</div>
      <div class="modal-footer">
		<button type = "button" class = "btn btn-default" data-dismiss = "modal">关闭</button>
		<a class="btn btn-info" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['members_id']); ?>" role="button">回复礼物</a>
      </div>
    </div>
  </div>
</div><?php endif; ?>
</div><?php } ?>

</div>


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