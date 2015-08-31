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
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($photo['members_id']); ?>" role="button">我的主页</a></div>

		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Social/Home/index" role="button">社交主页</a></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="#" role="button">修改资料</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="#" role="button">使用帮助</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Login/Login/index" role="button">退出</a></div>
		</div>
	</nav>
	
	<table class="table table-bordered">
		<tr class = "warning">
			<td>
				<div class="row">
					<div class="col-md-3"><img src="<?php echo ($photo['head_ptoto']); ?>" alt="..." class="img-rounded"  width="100%" height="150"></div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-3">xxx</div>
							<div class="col-md-3">Id:<?php echo ($photo['members_id']); ?></div>
							<div class="col-md-2">在线</div>
							<div class="col-md-4"><?php echo ($login_time); ?></div>
						</div>
						<div class="row">
							<div class="col-md-12">信息是会员自愿提供，目前暂无法确保100%真实，请理性对待</div>
						</div>
						<div class="row">
							<div class="col-md-12"><?php echo ($data['age']); ?>岁,<?php echo ($data['gender']); ?>,<?php echo ($data['schooling']); ?>学历,来自<?php echo ($data[home]); ?>,原籍<?php echo ($data['place']); ?></div>
						</div>
					</div>
					<div class="col-md-3"><img src="/single_love/Application/Home/View/Personal/Personal/mode/d.png" alt="..." class="img-rounded"  width="100%" height="150"></div>
				</div>
				<div class="row">
					<div class="col-md-2"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">相册</button></div>
					<div class="col-md-2"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">发信</button></div>
					<div class="col-md-2"><a class="btn btn-info" href="https://localhost/single_love/index.php/Home/Look/Followers/index/user_id/<?php echo ($photo['members_id']); ?>">加关注</a></div>
					<div class="col-md-2"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">送礼物</button></div>
					<div class="col-md-2"><a class="btn btn-info" href="#" role="button">举报</a></div>
					<div class="col-md-2"><a class="btn btn-info" href="#" role="button">加黑名单</a></div>
				</div>
			</td>
		</tr>

	</table>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">发送邮件</h4>
      </div>
      <div class="modal-body">

        <form action="/single_love/index.php/Home/Email/Email/email" method="post">
		<input type = "hidden" name = "user_id" value = <?php echo ($photo['members_id']); ?>>
          <div class="form-group">
            <label for="recipient-name" class="control-label"><?php echo ($photo['members_id']); ?></label>
          </div>
			<div class="form-group">
             <label for="recipient-name" class="control-label"><?php echo ($data['age']); ?>岁,<?php echo ($data['gender']); ?>,<?php echo ($data['schooling']); ?>学历,来自<?php echo ($data[home]); ?>,原籍<?php echo ($data['place']); ?></label>
		   </div>

          <div class="form-group">
            <label for="message-text" class="control-label">正文:</label>
            <textarea class="form-control" name="email" id="message-text" rows = "8"></textarea>
          </div>
     
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
		<input type="submit" value="发送邮件" class="btn btn-primary">
      </div>
		</form>
    </div>
  </div>
</div>




<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">发送礼物</h4>
      </div>
      <div class="modal-body">

        <form action="/single_love/index.php/Home/Gift/Gift/gift/userid/<?php echo ($photo['members_id']); ?>" method="post">
		<input type = "hidden" name = "user_id" value = <?php echo ($photo['members_id']); ?>>
          <div class="form-group">
            <label for="recipient-name" class="control-label"><?php echo ($photo['members_id']); ?></label>
          </div>
			<div class="form-group">
             <label for="recipient-name" class="control-label"><?php echo ($data['age']); ?>岁,<?php echo ($data['gender']); ?>,<?php echo ($data['schooling']); ?>学历,来自<?php echo ($data[home]); ?>,原籍<?php echo ($data['place']); ?></label>
		   </div>

          <div class="form-group">
            <label for="message-text" class="control-label">礼物:</label>
          </div>
			<div class="col-md-12">
						<table class="table table-bordered">
							<tr>
								<td>
										<?php $__FOR_START_155045338__=0;$__FOR_END_155045338__=$countGift;for($i=$__FOR_START_155045338__;$i < $__FOR_END_155045338__;$i+=1){ ?><div class="row">
												<div class="col-md-1"></div>
 				                   				<div class="col-md-5"><img src="<?php echo ($gift[$i]['road']); ?>" alt="..." class="img-rounded"  width="100%" height="150"></a></div>
												<div class="col-md-5"><img src="<?php echo ($gift[$i += 1]['road']); ?>" alt="..." class="img-rounded"  width="100%" height="150"></a></div>
											</div>
											<div class = "row">
												<div class="col-md-2"></div>
												<div class="col-md-6">礼物<?php echo ($gift[$i-1]['gift_id']); ?> <input type = "radio", name = "gift", value = <?php echo ($gift[$i-1]['gift_id']); ?>></div>
												<div class="col-md-4">礼物<?php echo ($gift[$i]['gift_id']); ?> <input type = "radio", name = "gift", value = <?php echo ($gift[$i]['gift_id']); ?>></div>
											</div><?php } ?>
									
								</td>
							</tr>
						</table>
						</div>
				<div class="form-group">
	             <label for="message-text" class="control-label">留言:</label>
	  	         <textarea class="form-control" name="message" id="message-text" rows = "4"></textarea>
               </div>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
		<input type="submit" value="发送礼物" class="btn btn-primary">
      </div>
	</form>
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">相册</h4>
		<div class="modal-footer">

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo ($photo['life_photo_1']); ?>" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="<?php echo ($photo['life_photo_2']); ?>" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
	<div class="item">
      	<img src="<?php echo ($photo['life_photo_3']); ?>" alt="...">
		<div class="carousel-caption">
		</div>
	</div>
	<div class="item">
		<img src="<?php echo ($photo['life_photo_4']); ?>" alt="...">
		<div class="carousel-caption">
		</div>
	</div>
	<div class="item">
    	<img src="<?php echo ($photo['life_photo_6']); ?>" alt="...">
		 <div class="carousel-caption">
		</div>
	</div>
	<div class="item">
		<img src="<?php echo ($photo['life_photo_6']); ?>" alt="...">
		<div class="carousel-caption">
       	</div>
	</div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			<button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>
		</div>
      </div>
    </div>
  </div>
</div>

	<table class="table table-bordered">
		<tr class = "warning">
			<td>
				<div class="col-md-8">


<table class="table table-bordered">
<tr class = "success">
<td>

<?php $__FOR_START_724157822__=0;$__FOR_END_724157822__=$about['num'];for($i=$__FOR_START_724157822__;$i < $__FOR_END_724157822__;$i+=1){ ?><div class = "row">
<div class="col-md-12">
<a href = "https://localhost/single_love/index.php/Home/Comments/Comments/index/aboutid/<?php echo ($about['about'][$i]['id']); ?>">
<blockquote>
  <p><span class = "badge"><?php echo ($about['count'][$i]); ?></span><?php echo ($about['about'][$i]['content']); ?></p></a>
  <footer>发贴时间:<cite title="Source Title"><?php echo ($about['about'][$i]['time']); ?></cite></footer>
</blockquote>
</div>
</div>

<div class = "row">
<?php if($about['about'][$i]['pic1']): ?><div class="col-md-3">
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal1<?php echo ($i); ?>" data-whatever="@mdo"><img src="<?php echo ($about['about'][$i]['pic1']); ?>" alt="..." class="img-rounded"  width="100%" height="50"></button>
</div><?php endif; ?>
<?php if($about['about'][$i]['pic2']): ?><div class="col-md-3">
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal1<?php echo ($i); ?>" data-whatever="@mdo"><img src="<?php echo ($about['about'][$i]['pic2']); ?>" alt="..." class="img-rounded"  width="100%" height="50"></button>
</div><?php endif; ?>
<?php if($about['about'][$i]['pic3']): ?><div class="col-md-3">
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal1<?php echo ($i); ?>" data-whatever="@mdo"><img src="<?php echo ($about['about'][$i]['pic3']); ?>" alt="..." class="img-rounded"  width="100%" height="50"></button>
</div><?php endif; ?>
</div>
<div class="modal fade" id="exampleModal1<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">相册</h4>
		<div class="modal-footer">
<div id="carousel-example-generic1<?php echo ($i); ?>" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<?php if($about['about'][$i]['pic1']): ?><div class="item active">
      <img src="<?php echo ($about['about'][$i]['pic1']); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div><?php endif; ?>
	<?php if($about['about'][$i]['pic2']): ?><div class="item">
      <img src="<?php echo ($about['about'][$i]['pic2']); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div><?php endif; ?>
	<?php if($about['about'][$i]['pic3']): ?><div class="item">
		<img src="<?php echo ($about['about'][$i]['pic3']); ?>" alt="...">
		<div class="carousel-caption">
       	</div>
	</div><?php endif; ?>	
	</div>
<!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic1<?php echo ($i); ?>" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic1<?php echo ($i); ?>" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			<button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>
		</div>
      </div>
    </div>
  </div>
</div>


<div class = "row">
<form action="/single_love/index.php/Home/Personal/DeleteAbout/index" enctype = "multipart/form-data" method="POST">
<div class="row">
<div class="col-md-8">
<input type="text" name="aboutid" value = <?php echo ($about['about'][$i]['id']); ?> style = "display:none;">
<input type="text" name="userid" value = <?php echo ($about['about'][$i]['members_id']); ?> style = "display:none;">
</div>
<div class = "col-md-3">
<button type = "submit" class = "btn btn-info btn-sm">删除</button>
</div>
</div>
</form>


<div class = "row">
<div class="col-md-12">
<table class="table table-bordered">
<tr class = "primary">
<td>
</td>
</tr>
</table>
</div>
</div>


</div><?php } ?>





</td>
</tr>
</table>


					</div>
					<div class="col-md-4">
						<table class="table table-bordered">
							<tr class = "success">
								<td>
									<div class="row">
										<div class="col-md-12"><h4><p class = "text-center">最新加入的会员</p></h4></div>
									</div>
										<?php $__FOR_START_1794335451__=0;$__FOR_END_1794335451__=$usercount;for($i=$__FOR_START_1794335451__;$i < $__FOR_END_1794335451__;$i+=1){ ?><div class="row">
											<div class="col-md-6">
											<div class="row">
 				                   				<div class="col-md-12">
												<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user1[$i]['id']); ?>"><img src="<?php echo ($user1[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"></a>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12"><p class = "text-center"><?php echo ($user1[$i]['nickname']); ?></p></div>
											</div>
											<div class="row">
												<div class="col-md-12"><p class = "text-center">西南民族大学</p></div>
											</div>
											<div class="row">
												<div class="col-md-12">&nbsp;</div>
											</div>
											</div>


											<div class="col-md-6">
											<div class="row">
 				                   				<div class="col-md-12">
												<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user1[$i]['id']); ?>"><img src="<?php echo ($user1[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"></a>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12"><p class = "text-center"><?php echo ($user1[$i]['nickname']); ?></p></div>
											</div>
											<div class="row">
												<div class="col-md-12"><p class = "text-center">成都信息工程大学</p></div>
											</div>
											<div class="row">
												<div class="col-md-12">&nbsp;</div>
											</div>
											</div>


											</div><?php } ?>
									</div>
								</td>
							</tr>
						</table>
					</div>	
				</div>
			</td>
		</tr>
	</table>

</div>
 </body>
</html>