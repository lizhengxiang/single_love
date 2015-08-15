<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	
  		<a href = "https://localhost/single_love/index.php/Home/Home/Home/index"><button><h3>个人主页</h3></button></a>
  		<a href="https://localhost/single_love/index.php/Home/Information/Information/index" target="_blank"><button><h3>修改资料</h3></button></a>
		<a href="https://localhost/single_love/index.php/Home/Email/Lookemail/index" target="_blank"><button><h3>收件箱(<?php echo ($count); ?>)</h3></button></a>
		<a href="https://localhost/single_love/index.php/Home/Look/Look/index" target="_blank"><button><h3>谁看过我(<?php echo ($look_count); ?>)</h3></button></a>
		<a href="https://localhost/single_love/index.php/Home/Look/Look/index" target="_blank"><button><h3>谁关注我(<?php echo ($followers); ?>)</h3></button></a>
		<a href="https://localhost/single_love/index.php/Home/Gift/GetGift/index"><button><h3>我收到的礼物(<?php echo ($giftcount); ?>)</h3></button></a>
		<h3>ID:<?php echo ($id); ?></h3>
	

  	<div id="content">
	<fieldset>
	<h2>最新会员</h2>
	<?php $__FOR_START_1857011989__=0;$__FOR_END_1857011989__=$usercount;for($i=$__FOR_START_1857011989__;$i < $__FOR_END_1857011989__;$i+=1){ ?><a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['id']); ?>" target="_blank"><img src="<?php echo ($user[$i]['head_photo']); ?>" height="100" width="125"/></a>	
			<?php echo ($user[$i]['nickname']); ?>
			<?php echo ($user[$i]['home']); } ?>
	</fieldset>
 </body>
</html>