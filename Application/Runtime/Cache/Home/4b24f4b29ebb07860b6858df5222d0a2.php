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
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user_id); ?>" role="button">个人中心</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Social/Home/index" role="button">社交主页</a></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Edge/Edge/index" role="button">緣分搜索</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Book/ShowBook/index" role="button">二手市場</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Login/Login/index" role="button">退出</a></div>
		</div>
	</nav>

<div class="row">
<div class="col-md-12">
<!--<table class="table table-bordered">
<tr class = "default">
<td>!-->
<!--
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="row">-->

<form action="/single_love/index.php/Home/Book/ShowBook/index" enctype = "multipart/form-data" method="POST">
<div class="row">
<div class="col-md-12">
<table class="table table-bordered">
<tr class ="info">
<td>
<div class="row">
<div class = "col-md-2">
<select class="form-control input-lg" name = "provinces">
<option>四川</option>
</select>
</div>
<div class = "col-md-3">
<select class="form-control input-lg" name = "school">
<option></option>
<option>西南民族大学</option>
<option>成都信息工程大学</option>
<option>四川大学</option>
<option>电子科技大学</option>
<option>西南财经大学</option>
</select>
</div>
<div class = "col-md-3">
<select class="form-control input-lg" name = "type">
<option></option>
<option>小说</option>
<option>法学</option>
<option>历史</option>
<option>科技</option>
<option>藏学</option>
<option>化学</option>
<option>医药</option>
<option>艺术</option>
<option>数学</option>
<option>心理学</option>
<option>水利水电</option>
<option>社会科学</option>
<option>经济管理</option>
<option>青春动漫</option>
<option>电气工程</option>
<option>建筑与环境</option>
<option>文学与新闻</option>
<option>励志与成功</option>
<option>英语与其他外语</option>
<option>计算机与互联网</option>
</select>
</div>

<div class = "col-md-3">
<input type="text" class="form-control input-lg" name="username" id="inputEmail3" placeholder="商品名" placeholder = ".input-lg">
</div>

<div class = "col-md-1">
<button type = "submit" class = "btn btn-info input-lg">搜索</button>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</form>

<table class="table table-bordered">
<tr class ="info">
<td>

<div class="col-md-12">
<div class="row">



<div class="col-md-12">
<!--<table class="table table-bordered">
<tr class = "default">
<td>-->
<div class="row">

<!-- Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="home">

<?php $__FOR_START_1487213280__=0;$__FOR_END_1487213280__=$goods['count'];for($i=$__FOR_START_1487213280__;$i < $__FOR_END_1487213280__;$i+=1){ ?><div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div>

<div class="row">
<div class="col-md-2">
<div class="row">
<div class="col-md-12">
<img src="<?php echo ($goods['var'][$i]['pic1']); ?>"  alt = "<?php echo ($goods['var'][$i]['bookname']); ?>dddd" class="img-rounded"  width="100%" height="150"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12 text-center">
<?php echo ($goods['var'][$i]['bookname']); ?>
</div>
</div>
<div class="row">
<div class="col-md-12 text-center">
&yen;<?php echo ($goods['var'][$i]['price']); ?>
</div>
</div>

<div class="row">
<div class="col-md-12 text-center">
<?php echo ($goods['var'][$i]['school']); ?>
</div>
</div>

<div class="row">
<div class="col-md-6 text-center">
<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#exampleModal1<?php echo ($i); ?>" data-whatever="@mdo">详细信息</button>
</div>
<div class="col-md-6 text-center">
<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#exampleModal2<?php echo ($i); ?>" data-whatever="@mdo">购买商品</button>
</div>
</div>
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
	<?php if($goods['var'][$i]['pic1']): ?><div class="item active">
      <img src="<?php echo ($goods['var'][$i]['pic1']); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div><?php endif; ?>
	<?php if($goods['var'][$i]['pic2']): ?><div class="item">
      <img src="<?php echo ($goods['var'][$i]['pic2']); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div><?php endif; ?>
	<?php if($goods['var'][$i]['pic3']): ?><div class="item">
		<img src="<?php echo ($goods['var'][$i]['pic3']); ?>" alt="...">
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
商品名:<?php echo ($goods['var'][$i]['bookname']); ?>
</div>
<div class="col-md-4 text-center">
作者:<?php echo ($goods['var'][$i]['author']); ?>
</div>
<div class="col-md-2 text-center">
數量:<?php echo ($goods['var'][$i]['number']); ?>
</div>
</div>

<div class="row">
<div class="col-md-6 text-center">
出版社:<?php echo ($goods['var'][$i]['press']); ?>
</div>
<div class="col-md-4 text-center">
分类:<?php echo ($goods['var'][$i]['type']); ?>
</div>
<div class="col-md-2 text-center">
价格:&yen;<?php echo ($goods['var'][$i]['price']); ?>
</div>
</div>
			<a class="btn btn-info" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($goods['var'][$i]['members_id']); ?>" role="button">举报</a>
			<button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>
		</div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
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


<?php if($user['user'][++$i]['id'] != 0): ?><div class="col-md-3">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user['user'][$i]['members_id']); ?>"><img src="<?php echo ($user[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($user['user'][$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($user['user'][$i]['schooling']); ?></p>
</div>
</div>
</div><?php endif; ?>
<?php if($user['user'][++$i]['id'] != 0): ?><div class="col-md-3">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user['user'][$i]['members_id']); ?>"><img src="<?php echo ($user[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($user['user'][$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($user['user'][$i]['schooling']); ?></p>
</div>
</div>
</div><?php endif; ?>
<?php if($user['user'][++$i]['id'] != 0): ?><div class="col-md-3">
<div class="row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user['user'][$i]['members_id']); ?>"><img src="<?php echo ($user[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="100"/></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($user['user'][$i]['nickname']); ?></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class = "text-center"><?php echo ($user['user'][$i]['schooling']); ?></p>
</div>
</div>
</div><?php endif; ?>
</div><?php } ?>

</div>


</div>
</div>
</div>

</td>
</tr>
</table>
</div>
<!--
<div class="col-md-3">
<table class="table table-bordered">
<tr class ="success">
<td>
<div class = "row">
<div class="col-md-12">
<form class="form-horizontal" action="index" method = "post">
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
</td>
</tr>
</table>
</div>-->
</div>
</div>
</div>
<!--</td>
</tr>
</table>-->


</div>
 </body>
</html>