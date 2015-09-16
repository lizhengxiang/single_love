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
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user_id); ?>" role="button">我的主页</a></div>
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
<?php if($tag == 1): ?><li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">谁看过我</a></li>
<?php else: ?>
<li role="presentation" ><a href="#home" aria-controls="home" role="tab" data-toggle="tab">谁看过我</a></li><?php endif; ?>
<?php if($tag == 2): ?><li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">我看过谁</a></li>
<?php else: ?>
<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">我看过谁</a></li><?php endif; ?>
<?php if($tag == 3): ?><li role="presentation" class="active"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">谁关注我</a></li>
<?php else: ?>
<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">谁关注我</a></li><?php endif; ?>
<?php if($tag == 4): ?><li role="presentation" class="active"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">我关注谁</a></li>
<?php else: ?>
<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">我关注谁</a></li><?php endif; ?>
<?php if($tag == 5): ?><li role="presentation" class="active"><a href="#blacklist" aria-controls="blacklist" role="tab" data-toggle="tab">黑名单</a></li>
<?php else: ?>
<li role="presentation"><a href="#blacklist" aria-controls="blacklist" role="tab" data-toggle="tab">黑名单</a></li><?php endif; ?>
</ul>

<!-- Tab panes -->
<div class="tab-content">
<?php if($tag == 1): ?><div role="tabpanel" class="tab-pane active" id="home">
<?php else: ?>
<div role="tabpanel" class="tab-pane " id="home"><?php endif; ?>
<?php $__FOR_START_596903551__=0;$__FOR_END_596903551__=$count;for($i=$__FOR_START_596903551__;$i < $__FOR_END_596903551__;$i+=1){ ?><div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div>

<div class="row">
<div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['id']); ?>"><img src="<?php echo ($user[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($user[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($user[$i]['time']); ?>
</div>
</div>
</div>
<div class="col-md-1"></div>
<?php if($user[++$i]['id'] != 0): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['id']); ?>"><img src="<?php echo ($user[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($user[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($user[$i]['time']); ?>
</div>
</div>
</div><?php endif; ?>
<div class="col-md-2"></div>
<?php if($user[++$i]['id'] != 0): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['id']); ?>"><img src="<?php echo ($user[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($user[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($user[$i]['time']); ?>
</div>
</div>
</div><?php endif; ?>
<div class="col-md-1"></div>
<?php if($user[++$i]['id'] != 0): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['id']); ?>"><img src="<?php echo ($user[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($user[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($user[$i]['time']); ?>
</div>
</div>
</div><?php endif; ?>
</div><?php } ?>

</div>
<?php if($tag == 3): ?><div role="tabpanel" class="tab-pane active" id="messages">
<?php else: ?>
<div role="tabpanel" class="tab-pane" id="messages"><?php endif; ?>
<?php $__FOR_START_394692598__=0;$__FOR_END_394692598__=$Follower['count'];for($i=$__FOR_START_394692598__;$i < $__FOR_END_394692598__;$i+=1){ ?><div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div>
<div class="row">
<div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($Follower[$i]['id']); ?>"><img src="<?php echo ($Follower[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($Follower[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($Follower[$i]['time']); ?>
</div>
</div>
</div>
<div class="col-md-1"></div>
<?php if($Follower[++$i]['id'] != 0): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($Follower[$i]['id']); ?>"><img src="<?php echo ($Follower[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($Follower[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($Follower[$i]['time']); ?>
</div>
</div>
</div><?php endif; ?>
<div class="col-md-2"></div>
<?php if($Follower[++$i]['id'] != 0): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($Follower[$i]['id']); ?>"><img src="<?php echo ($Follower[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($Follower[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($Follower[$i]['time']); ?>
</div>
</div>
</div><?php endif; ?>
<div class="col-md-1"></div>
<?php if($Follower[++$i]['id'] != 0): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($Follower[$i]['id']); ?>"><img src="<?php echo ($Follower[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($Follower[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($Follower[$i]['time']); ?>
</div>
</div>
</div><?php endif; ?>
</div><?php } ?>

</div>
<?php if($tag == 2): ?><div role="tabpanel" class="tab-pane active" id="profile">
<?php else: ?>
<div role="tabpanel" class="tab-pane" id="profile"><?php endif; ?>
<?php $__FOR_START_1804390791__=0;$__FOR_END_1804390791__=$Seenuser;for($i=$__FOR_START_1804390791__;$i < $__FOR_END_1804390791__;$i+=1){ ?><div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div>
<div class="row">
<div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($seen[$i]['id']); ?>"><img src="<?php echo ($seen[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($seen[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($seen[$i]['time']); ?>
</div>
</div>
</div>
<div class="col-md-1"></div>
<?php if($seen[++$i]['id'] != 0): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($seen[$i]['id']); ?>"><img src="<?php echo ($seen[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($seen[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($seen[$i]['time']); ?>
</div>
</div>
</div><?php endif; ?>
<div class="col-md-2"></div>
<?php if($seen[++$i]['id'] != 0): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($seen[$i]['id']); ?>"><img src="<?php echo ($seen[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($seen[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($seen[$i]['time']); ?>
</div>
</div>
</div><?php endif; ?>
<div class="col-md-1"></div>
<?php if($seen[++$i]['id'] != 0): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($seen[$i]['id']); ?>"><img src="<?php echo ($seen[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($seen[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($seen[$i]['time']); ?>
</div>
</div>
</div><?php endif; ?>
</div><?php } ?>

</div>
<?php if($tag == 4): ?><div role="tabpanel" class="tab-pane active" id="settings">
<?php else: ?>
 <div role="tabpanel" class="tab-pane" id="settings"><?php endif; ?>

<?php $__FOR_START_1652592118__=0;$__FOR_END_1652592118__=$Following['count'];for($i=$__FOR_START_1652592118__;$i < $__FOR_END_1652592118__;$i+=1){ ?><div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div>
<div class="row">
<div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($Following[$i]['id']); ?>"><img src="<?php echo ($Following[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($Following[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($Following[$i]['time']); ?>
</div>
</div>
</div>
<div class="col-md-1"></div>
<?php if($Following[++$i]['id'] != 0): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($Following[$i]['id']); ?>"><img src="<?php echo ($Following[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($Following[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($Following[$i]['time']); ?>
</div>
</div>
</div><?php endif; ?>
<div class="col-md-2"></div>
<?php if($Following[++$i]['id'] != 0): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($Following[$i]['id']); ?>"><img src="<?php echo ($Following[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($Following[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($Following[$i]['time']); ?>
</div>
</div>
</div><?php endif; ?>
<div class="col-md-1"></div>
<?php if($Following[++$i]['id'] != 0): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($Following[$i]['id']); ?>"><img src="<?php echo ($Following[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($Following[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($Following[$i]['time']); ?>
</div>
</div>
</div><?php endif; ?>
</div><?php } ?>
</div>
<?php if($tag == 5): ?><div role="tabpanel" class="tab-pane active" id="blacklist">
<?php else: ?>
<div role="tabpanel" class="tab-pane" id="blacklist"><?php endif; ?>

<?php $__FOR_START_1454054249__=0;$__FOR_END_1454054249__=0;for($i=$__FOR_START_1454054249__;$i < $__FOR_END_1454054249__;$i+=1){ ?><div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div>
<div class="row">
<div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['id']); ?>"><img src="<?php echo ($user[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($user[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($user[$i]['time']); ?>
</div>
</div>
</div>
<div class="col-md-1"></div>
<?php if($user[++$i]['id'] != 0): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['id']); ?>"><img src="<?php echo ($user[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($user[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($user[$i]['time']); ?>
</div>
</div>
</div><?php endif; ?>
<div class="col-md-2"></div>
<?php if($user[++$i]['id'] != 0): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['id']); ?>"><img src="<?php echo ($user[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($user[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($user[$i]['time']); ?>
</div>
</div>
</div><?php endif; ?>
<div class="col-md-1"></div>
<?php if($user[++$i]['id'] != 0): ?><div class="col-md-2">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['id']); ?>"><img src="<?php echo ($user[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($user[$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php echo ($user[$i]['time']); ?>
</div>
</div>
</div><?php endif; ?>
</div><?php } ?>


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