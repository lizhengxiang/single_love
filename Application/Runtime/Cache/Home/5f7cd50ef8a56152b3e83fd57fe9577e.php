<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<a href = "https://localhost/single_love/index.php/Home/Home/Home/index"><button><h3>个人主页</h3></button></a>
  	<div id="content">
	<form action="/single_love/index.php/Home/Gift/Gift/gift/userid/<?php echo ($data['members_id']); ?>" method="post">
	<fieldset>
 		<h2>赠送礼物</h2>
		<?php $__FOR_START_1119772468__=0;$__FOR_END_1119772468__=$count;for($i=$__FOR_START_1119772468__;$i < $__FOR_END_1119772468__;$i+=1){ ?><img src="<?php echo ($gift[$i]['road']); ?>" height="100" width="125"/>
			礼物<?php echo ($gift[$i]['gift_id']); ?>
			<input type = "radio", name = "gift", value = <?php echo ($gift[$i]['gift_id']); ?>><?php } ?>
 	</fieldset>
	</br>
	<?php echo ($data['age']); ?>岁,<?php echo ($data['gender']); ?>,<?php echo ($data['schooling']); ?>学历,<?php echo ($data['marriage']); ?>,来自<?php echo ($data[home]); ?>,原籍<?php echo ($data['place']); ?>.</br>
	<fieldset>
		<h4>祝福留言:</h4>
		<textarea  name="message" rows="6" cols="30">
我是一個樂觀的男孩 ... ... ... ...
		</textarea>
		</br>
		赠送方式: <input type="text" name="way">
	<fieldset>
	<input type="submit" value="赠送">
	</form>
 
 </body>
</html>