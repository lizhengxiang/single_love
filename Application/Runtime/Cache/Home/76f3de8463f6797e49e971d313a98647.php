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
<div class = "container">
<div class = "row">
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12"><h1><strong><p class = "text-center">欢迎注册社交520</p></strong></h1></div>
<div class = "col-md-12">&nbsp;</div>

<div class = "row">
<div class = "col-md-8">
<div class = "col-md-12">&nbsp;</div>
<img src="/single_love/Application/Home/View/Personal/Personal/mode/a.jpg" alt="..." class="img-rounded"  width="100%" height="300">
</div>
<div class = "col-md-4">
<form class="form-horizontal" action="registered" method = "post">
<div class = "row">
<div class = "col-md-12">
<input type="text" class="form-control input-lg" name="email" id="inputEmail3" placeholder="邮箱" required pattern="^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$" title="邮箱正确格式：xxx@xxx.xxx">
</div>
</div>
<div class = "col-md-12">&nbsp;</div>

<div class = "row">
<div class = "col-md-12">
<input type="text" class="form-control input-lg" name="wechat" id="inputEmail3" placeholder="微信号" required>
</div>
</div>
<div class = "col-md-12">&nbsp;</div>

<div class = "row">

<div class = "col-md-5">
<select class="form-control input-lg" name = "provinces">
<option>四川</option>
</select>
</div>



<div class = "col-md-7">
<select class="form-control input-lg" name = "school">
  <option>西南民族大学</option>
  <option>成都信息工程大学</option>
  <option>四川大学</option>
  <option>电子科技大学</option>
  <option>西南财经大学</option>
</select>
</div>

</div>
<div class = "col-md-12">&nbsp;</div>


<div class = "row">
<div class = "col-md-12">
<input type="text" class="form-control input-lg" name="nickname" id="inputEmail3" placeholder="昵称" required>
</div>
</div>

<div class = "col-md-12">&nbsp;</div>

<div class = "row">
<div class = "col-md-12">

<div class = "row">
<div class = "col-md-3"></div>
<div class = "col-md-2">
<label class="radio-inline">
  <input type="radio" name="gender" id="inlineRadio1" value="男" checked>男
</label>
</div>
<div class = "col-md-3"></div>
<div class = "col-md-4">
<label class="radio-inline">
  <input type="radio" name="gender" id="inlineRadio1" value="女">女
</label>
</div>
</div>
</div>
</div>
<div class = "col-md-12">&nbsp;</div>

<div class = "row">
<div class = "col-md-12">
<div class = "row">
 <div class = "col-md-4">
<select class="form-control input-lg" name = "year">
<?php $__FOR_START_53326312__=1980;$__FOR_END_53326312__=2013;for($i=$__FOR_START_53326312__;$i < $__FOR_END_53326312__;$i+=1){ ?><option><?php echo ($i); ?></option><?php } ?>
</select>
</div>
 <div class = "col-md-4">
<select class="form-control input-lg" name = "mouth">
<?php $__FOR_START_1513350137__=1;$__FOR_END_1513350137__=13;for($i=$__FOR_START_1513350137__;$i < $__FOR_END_1513350137__;$i+=1){ ?><option><?php echo ($i); ?></option><?php } ?>
</select>
</div>
 <div class = "col-md-4">
<select class="form-control input-lg" name = "day">
<?php $__FOR_START_880621397__=1;$__FOR_END_880621397__=32;for($i=$__FOR_START_880621397__;$i < $__FOR_END_880621397__;$i+=1){ ?><option><?php echo ($i); ?></option><?php } ?>
</select>
</div>
</div>
</div>
</div>
<div class = "col-md-12">&nbsp;</div>


<div class = "row">
<div class = "col-md-12">
<p class = "text-center"><button type = "submit" class = "btn btn-primary btn-lg">完成</button></p>
</div>
</div>
</form>
</div>

 <div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">&nbsp;</div>
 <div class = "col-md-12"><p class = "text-center">注册完成后登录用户名和密码到邮箱查收</p></div>
</div>
</div>
</div>
 </body>
</html>