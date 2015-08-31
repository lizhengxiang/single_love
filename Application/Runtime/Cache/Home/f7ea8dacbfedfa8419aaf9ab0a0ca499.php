<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <head>
   
	<script>
    function ok(a) {
        $("#tra"+a).val("");
        $("pp"+a).show("slow");
     
    
    function save() {
        //var cont = $("#tra").val();
        //alert(cont);
    }
    document.onclick = function (event) {
        var e = event || window.event;
        var elem = e.srcElement || e.target;
        while (elem) {
            if (elem != document) {
                if (elem.id == "a"+a || elem.id == "tra"+a) {
                    $("#pp"+a).show("slow");
                    return;
                }
                elem = elem.parentNode;
            } else {
                $("#pp"+a).hide("slow");
                return;
            }
        }
    } } 
	</script>


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
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($id); ?>" role="button">我的主页</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Social/Home/index" role="button">社交主页</a></div>
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
			<tr class = "warning">
				<td>

<div class = "row">
<div class="col-md-9">
<div class="row">
<div class="col-md-12">
<table class="table table-bordered">
<tr class = "success">
<td>
<div class = "row">
	<div class="col-md-2">
		<div class = "row">
			<div class="col-md-12">
				<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($about[0]['members_id']); ?>"><img src="<?php echo ($head['head_ptoto']); ?>" alt="..." class="img-rounded"  width="100%" height="85"></a>
			</div>
		</div>
		<div class = "row">
			<div class="col-md-1"></div>
			<div class="col-md-11">
				ID:<?php echo ($about[0]['members_id']); ?>
			</div>
		</div>
	</div>
	<div class="col-md-10">
		<div class = "row">
			<div class="col-md-12">
				<blockquote>
  					<p><?php echo ($about[0]['content']); ?></p>
  					<footer>发表时间<cite title="Source Title"><?php echo ($about[0]['time']); ?></cite></footer>
				</blockquote>
			</div>
		</div>
	


<div class = "row">
<div class = "row">



<?php if($about[0]['pic1']): ?><div class="col-md-1"></div>
<div class="col-md-3">
<button type="button"  class="btn btn-info" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"><img src="<?php echo ($about[0]['pic1']); ?>" alt="..." class="img-rounded"  width="100%" height="50"></button>
</div><?php endif; ?>
<?php if($about[0]['pic2']): ?><div class="col-md-3">
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"><img src="<?php echo ($about[0]['pic2']); ?>" alt="..." class="img-rounded"  width="100%" height="50"></button>
</div><?php endif; ?>
<?php if($about[0]['pic3']): ?><div class="col-md-3">
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"><img src="<?php echo ($about[0]['pic3']); ?>" alt="..." class="img-rounded"  width="100%" height="50"></button>
</div><?php endif; ?>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">相册</h4>
		<div class="modal-footer">



<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<?php if($about[0]['pic1']): ?><div class="item active">
      <img src="<?php echo ($about[0]['pic1']); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div><?php endif; ?>
	<?php if($about[0]['pic2']): ?><div class="item">
      <img src="<?php echo ($about[0]['pic2']); ?>" alt="...">
      <div class="carousel-caption">

      </div>
    </div><?php endif; ?>
	<?php if($about[0]['pic3']): ?><div class="item">
		<img src="<?php echo ($about[0]['pic3']); ?>" alt="...">
		<div class="carousel-caption">
       	</div>
	</div><?php endif; ?>	
	</div>
<!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
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
<div class="col-md-8"></div>
<div class="col-md-4"><button type="button" onclick="ok('a')" id = "aa"><img src="/single_love/Application/Home/View/Personal/Personal/mode/f.jpg" alt="..." class="img-rounded"  width="25" height="25"></div>
</div>
<div id="cont">
</div>
<div id="ppa" style="display:none;">

<form id="myform" action = "/single_love/index.php/Home/Commit/Commit/index"method = "post">
<div class = "row">
<div class="col-md-1"></div>
<div class="col-md-9">
<textarea class ="form-control" rows = "3" id = "traa" name = "name">
</textarea>
<input type = "text" name = "id" value = "<?php echo ($about[0]['id']); ?>" style="display:none">
<input type = "text" name = "contentid" value = "0" style="display:none">
</div>

<!--
<div class = "row">
<div class="col-md-8"></div>-->
<div class="col-md-2">
<div class = "row">
<div class="col-md-12">&nbsp;</div>
</div>
<button type = "submit" id = "sbmt"><img src="/single_love/Application/Home/View/Personal/Personal/mode/f.jpg" alt="...    " class="img-rounded"  width="25" height="25"></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

</div>
</td>
</tr>
</table>

<div class="row">
<div class="col-md-12">
<table class="table table-bordered">
<tr class = "info">
<td>

<?php $__FOR_START_1186803586__=0;$__FOR_END_1186803586__=$commit['count'];for($i=$__FOR_START_1186803586__;$i < $__FOR_END_1186803586__;$i+=1){ if($commit['about'][$i]['tag'] == 0): ?><div class = "row">
<div class="col-md-2">
<div class = "row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($commit['about'][$i]['members_id']); ?>"><img src="<?php echo ($commit['head_a'][$i]['head_ptoto']); ?>" alt="..." class="img-rounded"  width="100%" height="85"></a>
</div>
</div>

<div class = "row">
<div class="col-md-1"></div>
<div class="col-md-11">
ID:<?php echo ($commit['about'][$i]['members_id']); ?>
</div>
</div>
</div>

<div class="col-md-10">
        <div class = "row">
             <div class="col-md-12">
                 <blockquote> 
                   <p><?php echo ($commit['about'][$i]['content']); ?></p>
                     <footer>评论时间<cite title="Source Title"><?php echo ($commit['about'][$i]['time']); ?></cite></footer>
                 </blockquote>
             </div>
         </div>
     


<div class = "row">
<div class="col-md-8"></div>
<div class="col-md-4"><button type="button" onclick="ok('<?php echo ($i); ?>')" id = "a<?php echo ($i); ?>"><img src="/single_love/Application/Home/View/Personal/Personal/mode/f.jpg" alt="..." class="img-rounded"  width="25" height="25"></div>
</div>
<div id="cont">
</div>
<div id="pp<?php echo ($i); ?>" style="display:none;">

<form id="myform" action = "/single_love/index.php/Home/Commit/Commit/index"method = "post">
<div class = "row">
<div class="col-md-1"></div>
<div class="col-md-9">
<textarea class ="form-control" rows = "3" id = "tra<?php echo ($i); ?>" name = "name">
</textarea>
<input type = "text" name = "id" value = "<?php echo ($commit['about'][$i]['aboutid']); ?>" style="display:none">
<input type = "text" name = "tag" value = "<?php echo ($commit['about'][$i]['members_id']); ?>" style="display:none">
<input type = "text" name = "contentid" value = "<?php echo ($commit['about'][$i]['id']); ?>" style="display:none">
</div>
<div class="col-md-2">
<div class = "row">
<div class="col-md-12">&nbsp;</div>
</div>
<button type = "submit" id = "sbmt1"><img src="/single_love/Application/Home/View/Personal/Personal/mode/f.jpg" alt="...    " class="img-rounded"  width    ="25" height="25"></button>
</div>
</div>
</form>
</div>
</div>
</div>

<?php else: ?>

<div class = "row">
<div class="col-md-3"></div>
<div class="col-md-1">
<div class = "row">
<div class="col-md-12">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($commit['about'][$i]['members_id']); ?>"><img src="<?php echo ($commit['head_a'][$i]['head_ptoto']); ?>" alt="..." class="img-rounded"  width="100%" height="40"></a>
</div>
</div>

<div class = "row">
<div class="col-md-1"></div>
<div class="col-md-11">
<!--ID:<?php echo ($commit['about'][$i]['members_id']); ?>-->
</div>
</div>
</div>

<div class="col-md-8">
        <div class = "row">
             <div class="col-md-12">
                 <blockquote> 
                   <p><a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($commit['about'][$i]['members_id']); ?>"><?php echo ($commit['about'][$i]['members_id']); ?></a>回复<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($commit['about'][$i]['tag']); ?>"><?php echo ($commit['about'][$i]['tag']); ?></a>:<?php echo ($commit['about'][$i]['content']); ?></p>
                     <footer>评论时间<cite title="Source Title"><?php echo ($commit['about'][$i]['time']); ?></cite></footer>
                 </blockquote>
             </div>
         </div>
     


<div class = "row">
<div class="col-md-7"></div>
<div class="col-md-5"><button type="button" onclick="ok('<?php echo ($i); ?>')" id = "a<?php echo ($i); ?>"><img src="/single_love/Application/Home/View/Personal/Personal/mode/f.jpg" alt="..." class="img-rounded"  width="25" height="25"></div>
</div>
<div id="cont">
</div>
<div id="pp<?php echo ($i); ?>" style="display:none;">

<form id="myform" action = "/single_love/index.php/Home/Commit/Commit/index"method = "post">
<div class = "row">
<div class="col-md-1"></div>
<div class="col-md-9">
<textarea class ="form-control" rows = "3" id = "tra<?php echo ($i); ?>" name = "name">
</textarea>
<input type = "text" name = "id" value = "<?php echo ($commit['about'][$i]['aboutid']); ?>" style="display:none">
<input type = "text" name = "tag" value = "<?php echo ($commit['about'][$i]['members_id']); ?>" style="display:none">
<input type = "text" name = "contentid" value = "<?php echo ($commit['about'][$i]['id']); ?>" style="display:none">
</div>
<div class="col-md-2">
<div class = "row">
<div class="col-md-12">&nbsp;</div>
</div>
<button type = "submit" id = "sbmt1"><img src="/single_love/Application/Home/View/Personal/Personal/mode/f.jpg" alt="...    " class="img-rounded"  width    ="25" height="25"></button>
</div>
</div>
</form>
</div>
</div>
</div><?php endif; ?>
<?php if($commit['about'][$i+1]['tag'] == 0): ?><div class = "row">
<div class="col-md-12">
<table class="table table-bordered">
<tr class = "primary">
<td>
</td>
</tr>
</table>
</div>
</div><?php endif; } ?>
</td>
</tr>
</table>
</div>
</div>

</div>

</div>
</div>
<div class="col-md-3">
还没想好放什么
</div>
</div>



				</td>
			</tr>
		</table>
	</div>
</div>

</div>
 </body>
</html>