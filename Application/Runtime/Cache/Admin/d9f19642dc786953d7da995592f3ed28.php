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

<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">删除说说</a></li>
<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">删除商品</a></li>
<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">删除信件</a></li>
<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">删除相册</a></li>
<li role="presentation"><a href="#blacklist" aria-controls="blacklist" role="tab" data-toggle="tab">删除礼物</a></li>

</ul>

<!-- Tab panes -->
<div class="tab-content">

<div role="tabpanel" class="tab-pane active" id="home">

<?php $__FOR_START_1908037707__=0;$__FOR_END_1908037707__=$about['num'];for($i=$__FOR_START_1908037707__;$i < $__FOR_END_1908037707__;$i+=1){ ?><div class = "row">
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
<form action="/single_love/index.php/Admin/Data/DeleteAbout/index" enctype = "multipart/form-data" method="POST">
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

</div>
<div class = "row">
<div class="col-md-12">
<table class="table table-bordered">
<tr class = "primary">
<td>
</td>
</tr>
</table>
</div>

</div><?php } ?>
<!--以上爲刪除說說-->

</div>

<div role="tabpanel" class="tab-pane" id="messages">

<?php $__FOR_START_1672026009__=0;$__FOR_END_1672026009__=$send['count'];for($i=$__FOR_START_1672026009__;$i < $__FOR_END_1672026009__;$i+=1){ ?><div class="row">
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
<form action="/single_love/index.php/Admin/Data/Delete/index" enctype = "multipart/form-data" method="POST">
<div class="row">
<div class="col-md-1">
<input type="text" name="emailid" value = <?php echo ($send["email"][$i]["id"]); ?> style = "display:none;">

<input type="text" name="user_id" style="display:none;" value = <?php echo ($send["email"][$i]["members_id_a"]); ?>>
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

<div role="tabpanel" class="tab-pane" id="profile">

<?php $__FOR_START_1622590889__=0;$__FOR_END_1622590889__=$count3['count'];for($i=$__FOR_START_1622590889__;$i < $__FOR_END_1622590889__;$i+=1){ ?><div class="row">
<div class="col-md-3">
<img src="<?php echo ($count3["book"][$i]["pic1"]); ?>" alt="..." class="img-rounded"  width="100%" height="100">
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
<div class = "row">
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">
		商品名:<?php echo ($count3["book"][$i]["bookname"]); ?>
	</div>
	<div class="col-md-12">
		上传时间:<?php echo ($count3["book"][$i]["time"]); ?>
	</div>
</div>
</div>
<div class="col-md-4">
<div class = "row">
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-6">
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal5<?php echo ($i); ?>" data-whatever="@mdo">查看</button>
</div>
<div class="col-md-6">
<a class="btn btn-warning" href="https://localhost/single_love/index.php/Admin/Data/Data/book_b/bookid/<?php echo ($count3['book'][$i]['id']); ?>/userid/<?php echo ($count3['book'][$i]['members_id']); ?>" role="button">删除</a>
</div>
</div>
<div class="modal fade" id="exampleModal5<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">订单信息</h4>
		<div class="modal-footer">
<div id="carousel-example-generic5<?php echo ($i); ?>" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<?php if($count3['book'][$i]['pic1']): ?><div class="item active">
      <img src="<?php echo ($count3['book'][$i]['pic1']); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div><?php endif; ?>
	<?php if($count3['book'][$i]['pic2']): ?><div class="item">
      <img src="<?php echo ($count3['book'][$i]['pic2']); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div><?php endif; ?>
	<?php if($count3['book'][$i]['pic3']): ?><div class="item">
		<img src="<?php echo ($count3['book'][$i]['pic3']); ?>" alt="...">
		<div class="carousel-caption">
       	</div>
	</div><?php endif; ?>	
	</div>
<!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic5<?php echo ($i); ?>" role="button" data-slide="prev">

    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic5<?php echo ($i); ?>" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="row">
<div class="col-md-6 text-center">
商品名:<?php echo ($count3["book"][$i]["bookname"]); ?>
</div>
<div class="col-md-4 text-center">
<?php if($count3['book'][$i][0]['author']): ?>作者:<?php echo ($count3["book"][$i]["author"]); endif; ?>
</div>
<div class="col-md-2 text-center">
剩余量:<?php echo ($count3["book"][$i]["number"]); ?>
</div>
</div>
<div class="row">
<div class="col-md-6 text-center">
分类:<?php echo ($count3["book"][$i]["type"]); ?>
</div>
<div class="col-md-4 text-center">
<?php if($count3['book'][$i][0]['press']): ?>出版社:<?php echo ($count3["book"][$i]["press"]); endif; ?>
</div>
<div class="col-md-2 text-center">
价格:&yen;<?php echo ($count3["book"][$i]["price"]); ?>
</div>

 </div></div></div>
	<div class="modal-footer">
    	<button type="button" class="btn btn-info" data-dismiss="modal">关闭</button> 
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
 <div role="tabpanel" class="tab-pane" id="settings">
<div class="row">

<div class="col-md-4">
<div class="row">
<div class="col-md-12">
<img src="<?php echo ($photo['head_ptoto']); ?>" alt="..." width="100%" height="200">
</div>
</div>
<div class="row">
<div class="col-md-5 "></div>
<div class="col-md-2 ">
<a class="btn btn-warning center" href="" role="button">删除</a>
</div>
</div>
<div class="row">
<div class="col-md-12">&nbsp;</div>
</div>
</div>

<div class="col-md-4">
<div class="row">
<div class="col-md-12">
<img src="<?php echo ($photo['life_photo_1']); ?>" alt="..." width="100%" height="200">
</div>
</div>
<div class="row">
<div class="col-md-5 "></div>
<div class="col-md-2 ">
<a class="btn btn-warning center" href="" role="button">删除</a>
</div>
</div>
<div class="row">
<div class="col-md-12">&nbsp;</div>
</div>
</div>

<div class="col-md-4">
<div class="row">
<div class="col-md-12">
<img src="<?php echo ($photo['life_photo_2']); ?>" alt="..." width="100%" height="200">
</div>
</div>
<div class="row">
<div class="col-md-5 "></div>
<div class="col-md-2 ">
<a class="btn btn-warning center" href="" role="button">删除</a>
</div>
</div>
<div class="row">
<div class="col-md-12">&nbsp;</div>
</div>
</div>

<div class="col-md-4">
<div class="row">
<div class="col-md-12">
<img src="<?php echo ($photo['life_photo_3']); ?>" alt="..." width="100%" height="200">
</div>
</div>
<div class="row">
<div class="col-md-5 "></div>
<div class="col-md-2 ">
<a class="btn btn-warning center" href="" role="button">删除</a>
</div>
</div>
<div class="row">
<div class="col-md-12">&nbsp;</div>
</div>
</div>

<div class="col-md-4">
<div class="row">
<div class="col-md-12">
<img src="<?php echo ($photo['life_photo_4']); ?>" alt="..." width="100%" height="200">
</div>
</div>
<div class="row">
<div class="col-md-5 "></div>
<div class="col-md-2 ">
<a class="btn btn-warning center" href="" role="button">删除</a>
</div>
</div>
<div class="row">
<div class="col-md-12">&nbsp;</div>
</div>
</div>

<div class="col-md-4">
<div class="row">
<div class="col-md-12">
<img src="<?php echo ($photo['life_photo_5']); ?>" alt="..." width="100%" height="200">
</div>
</div>
<div class="row">
<div class="col-md-5 "></div>
<div class="col-md-2 ">
<a class="btn btn-warning center" href="" role="button">删除</a>
</div>
</div>
<div class="row">
<div class="col-md-12">&nbsp;</div>
</div>
</div>

<div class="col-md-4">
<div class="row">
<div class="col-md-12">
<img src="<?php echo ($photo['life_photo_6']); ?>" alt="..." width="100%" height="200">
</div>
</div>
<div class="row">
<div class="col-md-5 "></div>
<div class="col-md-2 ">
<a class="btn btn-warning center" href="" role="button">删除</a>
</div>
</div>
<div class="row">
<div class="col-md-12">&nbsp;</div>
</div>
</div>

<div class="row">
<div class="col-md-3"></div>
</div>

</div>
<?php if($tag == 5): ?><div role="tabpanel" class="tab-pane active" id="blacklist">
<?php else: ?>
<div role="tabpanel" class="tab-pane" id="blacklist"><?php endif; ?>

<?php $__FOR_START_855102899__=0;$__FOR_END_855102899__=0;for($i=$__FOR_START_855102899__;$i < $__FOR_END_855102899__;$i+=1){ ?><div class="row">
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