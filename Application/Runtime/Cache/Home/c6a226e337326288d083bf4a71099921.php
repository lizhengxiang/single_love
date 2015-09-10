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
<?php if($tag == 1): ?><li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">待处理订单</a></li>
<?php else: ?>
<li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">待处理订单</a></li><?php endif; ?>
<?php if($tag == 2): ?><li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">已处理订单</a></li>
<?php else: ?>
<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">已处理订单</a></li><?php endif; ?>
<?php if($tag == 3): ?><li role="presentation" class="active"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">我的订单</a></li>
<?php else: ?>
<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">我的订单</a></li><?php endif; ?>
<?php if($tag == 4): ?><li role="presentation" class="active"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">我的商品</a></li>
<?php else: ?>
 <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">我的商品</a></li><?php endif; ?>
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
<?php $__FOR_START_454537940__=0;$__FOR_END_454537940__=$count['count'];for($i=$__FOR_START_454537940__;$i < $__FOR_END_454537940__;$i+=1){ ?><div class="row">
<div class="col-md-3">
<img src="<?php echo ($count["book"][$i][0]["pic1"]); ?>" alt="..." class="img-rounded"  width="100%" height="100">
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
<div class = "row">
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">
		商品名:<?php echo ($count["book"][$i][0]["bookname"]); ?>
	</div>
	<div class="col-md-12">
		订单时间:<?php echo ($count["var"][$i]["time_a"]); ?>
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
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal2<?php echo ($i); ?>" data-whatever="@mdo">接收订单</button>
</div>
<div class="col-md-6">

</div>
</div>
<div class="modal fade" id="exampleModal2<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">订单信息</h4>
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
	<?php if($count['book'][$i][0]['pic1']): ?><div class="item active">
      <img src="<?php echo ($count['book'][$i][0]['pic1']); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div><?php endif; ?>
	<?php if($count['book'][$i][0]['pic2']): ?><div class="item">
      <img src="<?php echo ($count['book'][$i][0]['pic2']); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div><?php endif; ?>
	<?php if($count['book'][$i][0]['pic3']): ?><div class="item">
		<img src="<?php echo ($count['book'][$i][0]['pic3']); ?>" alt="...">
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
<div class="row">
<div class="col-md-6 text-center">
商品名:<?php echo ($count["book"][$i][0]["bookname"]); ?>
</div>
<div class="col-md-4 text-center">
<?php if($count['book'][$i][0]['author']): ?>作者:<?php echo ($count["book"][$i][0]["author"]); endif; ?>
</div>
<div class="col-md-2 text-center">
剩余量:<?php echo ($count["book"][$i][0]["number"]); ?>
</div>
</div>
<div class="row">
<div class="col-md-6 text-center">
分类:<?php echo ($count["book"][$i][0]["type"]); ?>
</div>
<div class="col-md-4 text-center">
<?php if($count['book'][$i][0]['press']): ?>出版社:<?php echo ($count["book"][$i][0]["press"]); endif; ?>
</div>
<div class="col-md-2 text-center">
价格:&yen;<?php echo ($count["book"][$i][0]["price"]); ?>
</div>
<div class="row">
<div class="col-md-12">
学校:<?php echo ($count["var"][$i]["school"]); ?>
</div>
</div>

<div class="row">
<div class="col-md-12">
地址:<?php echo ($count["var"][$i]["home"]); ?>
</div>
</div>

<div class="row">
<div class="col-md-12">
电话:<?php echo ($count["var"][$i]["tel"]); ?>
</div>
</div>

 </div></div></div>
	<div class="modal-footer">
		<a class="btn btn-info" href="https://localhost/single_love/index.php/Home/Book/Showorder/book/bookid/<?php echo ($count["var"][$i]["id"]); ?>" role="button">确认接收</a>
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


<?php $__FOR_START_100837689__=0;$__FOR_END_100837689__=$count2['count'];for($i=$__FOR_START_100837689__;$i < $__FOR_END_100837689__;$i+=1){ ?><div class="row">
<div class="col-md-3">
<img src="<?php echo ($count2["book"][$i][0]["pic1"]); ?>" alt="..." class="img-rounded"  width="100%" height="100">
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
<div class = "row">
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">
		商品名:<?php echo ($count2["book"][$i][0]["bookname"]); ?>
	</div>
	<div class="col-md-12">
		处理时间:<?php echo ($count2["var"][$i]["time_a"]); ?>
	</div>
	<div class="col-md-12">
		<?php if($count2['var'][$i]['tag']): ?>对方:已接收订单
		<?php else: ?>
			对方:未接收订单<?php endif; ?>
	</div>
</div>
</div>
<div class="col-md-4">
<div class = "row">
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-6">
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal4<?php echo ($i); ?>" data-whatever="@mdo">查看</button>
</div>
<div class="col-md-6">

</div>
</div>
<div class="modal fade" id="exampleModal4<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">订单信息</h4>
		<div class="modal-footer">
<div id="carousel-example-generic4<?php echo ($i); ?>" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<?php if($count2['book'][$i][0]['pic1']): ?><div class="item active">
      <img src="<?php echo ($count2['book'][$i][0]['pic1']); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div><?php endif; ?>
	<?php if($count2['book'][$i][0]['pic2']): ?><div class="item">
      <img src="<?php echo ($count2['book'][$i][0]['pic2']); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div><?php endif; ?>
	<?php if($count2['book'][$i][0]['pic3']): ?><div class="item">
		<img src="<?php echo ($count2['book'][$i][0]['pic3']); ?>" alt="...">
		<div class="carousel-caption">
       	</div>
	</div><?php endif; ?>	
	</div>
<!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic4<?php echo ($i); ?>" role="button" data-slide="prev">

    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic4<?php echo ($i); ?>" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="row">
<div class="col-md-6 text-center">
商品名:<?php echo ($count2["book"][$i][0]["bookname"]); ?>
</div>
<div class="col-md-4 text-center">
<?php if($count2['book'][$i][0]['author']): ?>作者:<?php echo ($count2["book"][$i][0]["author"]); endif; ?>
</div>
<div class="col-md-2 text-center">
剩余量:<?php echo ($count2["book"][$i][0]["number"]); ?>
</div>
</div>
<div class="row">
<div class="col-md-6 text-center">
分类:<?php echo ($count2["book"][$i][0]["type"]); ?>
</div>
<div class="col-md-4 text-center">
<?php if($count2['book'][$i][0]['press']): ?>出版社:<?php echo ($count2["book"][$i][0]["press"]); endif; ?>
</div>
<div class="col-md-2 text-center">
价格:&yen;<?php echo ($count2["book"][$i][0]["price"]); ?>
</div>
<div class="row">
<div class="col-md-12">
学校:<?php echo ($count2["var"][$i]["school"]); ?>
</div>
</div>

<div class="row">
<div class="col-md-12">
地址:<?php echo ($count2["var"][$i]["home"]); ?>
</div>
</div>

<div class="row">
<div class="col-md-12">
电话:<?php echo ($count2["var"][$i]["tel"]); ?>
</div>
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


<?php $__FOR_START_1826713907__=0;$__FOR_END_1826713907__=$count1['count'];for($i=$__FOR_START_1826713907__;$i < $__FOR_END_1826713907__;$i+=1){ ?><div class="row">
<div class="col-md-3">
<img src="<?php echo ($count1["book"][$i][0]["pic1"]); ?>" alt="..." class="img-rounded"  width="100%" height="100">
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
<div class = "row">
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">
		商品名:<?php echo ($count1["book"][$i][0]["bookname"]); ?>
	</div>
	<div class="col-md-12">
		处理时间:<?php echo ($count1["var"][$i]["time_b"]); ?>
	</div>
	<div class="col-md-12">
		已处理
	</div>
</div>
</div>
<div class="col-md-4">
<div class = "row">
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-6">
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal3<?php echo ($i); ?>" data-whatever="@mdo">查看</button>
</div>
<div class="col-md-6">
<a class="btn btn-warning" href="https://localhost/single_love/index.php/Home/Book/Showorder/book_a/bookid/<?php echo ($count1["var"][$i]["id"]); ?>" role="button">删除</a>
</div>
</div>
<div class="modal fade" id="exampleModal3<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">订单信息</h4>
		<div class="modal-footer">
<div id="carousel-example-generic3<?php echo ($i); ?>" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<?php if($count1['book'][$i][0]['pic1']): ?><div class="item active">
      <img src="<?php echo ($count1['book'][$i][0]['pic1']); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div><?php endif; ?>
	<?php if($count1['book'][$i][0]['pic2']): ?><div class="item">
      <img src="<?php echo ($count1['book'][$i][0]['pic2']); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div><?php endif; ?>
	<?php if($count1['book'][$i][0]['pic3']): ?><div class="item">
		<img src="<?php echo ($count1['book'][$i][0]['pic3']); ?>" alt="...">
		<div class="carousel-caption">
       	</div>
	</div><?php endif; ?>	
	</div>
<!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic3<?php echo ($i); ?>" role="button" data-slide="prev">

    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic3<?php echo ($i); ?>" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="row">
<div class="col-md-6 text-center">
商品名:<?php echo ($count1["book"][$i][0]["bookname"]); ?>
</div>
<div class="col-md-4 text-center">
<?php if($count1['book'][$i][0]['author']): ?>作者:<?php echo ($count1["book"][$i][0]["author"]); endif; ?>
</div>
<div class="col-md-2 text-center">
剩余量:<?php echo ($count1["book"][$i][0]["number"]); ?>
</div>
</div>
<div class="row">
<div class="col-md-6 text-center">
分类:<?php echo ($count1["book"][$i][0]["type"]); ?>
</div>
<div class="col-md-4 text-center">
<?php if($count1['book'][$i][0]['press']): ?>出版社:<?php echo ($count1["book"][$i][0]["press"]); endif; ?>
</div>
<div class="col-md-2 text-center">
价格:&yen;<?php echo ($count1["book"][$i][0]["price"]); ?>
</div>
<div class="row">
<div class="col-md-12">
学校:<?php echo ($count1["var"][$i]["school"]); ?>
</div>
</div>

<div class="row">
<div class="col-md-12">
地址:<?php echo ($count1["var"][$i]["home"]); ?>
</div>
</div>

<div class="row">
<div class="col-md-12">
电话:<?php echo ($count1["var"][$i]["tel"]); ?>
</div>
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
</div>
</div>
</div>

</div>
<?php if($tag == 4): ?><div role="tabpanel" class="tab-pane active" id="settings">
<?php else: ?>
<div role="tabpanel" class="tab-pane" id="settings"><?php endif; ?>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="row">
<div class="col-md-12"> 


<?php $__FOR_START_1447907659__=0;$__FOR_END_1447907659__=$count3['count'];for($i=$__FOR_START_1447907659__;$i < $__FOR_END_1447907659__;$i+=1){ ?><div class="row">
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
<a class="btn btn-warning" href="https://localhost/single_love/index.php/Home/Book/Showorder/book_b/bookid/<?php echo ($count3['book'][$i]['id']); ?>" role="button">删除</a>
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
</div>
</div>
</div>



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