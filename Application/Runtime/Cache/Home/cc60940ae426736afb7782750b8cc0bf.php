<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<ul>
  		<li><a href = "https://localhost/single_love/index.php/Home/Home/Home/index"><h1>个人主页</h1></a></li>
  		<li><a href="https://localhost/single_love/index.php/Home/Information/Information/index" target="_blank"><h1>修改资料</h1></a></li>
		<li><a href="https://localhost/single_love/index.php/Home/Email/Lookemail/index" target="_blank"><h3>收件箱(<?php echo ($count); ?>)</h3></a></li>
		<li><a href="https://localhost/single_love/index.php/Home/Look/Look/index" target="_blank"><h3>谁看过我(<?php echo ($look_count); ?>)</h3></a></li>
		<h3>ID:<?php echo ($id); ?></h3>
	</ul>

  	<div id="content">
	<?php $__FOR_START_1255089834__=0;$__FOR_END_1255089834__=$usercount;for($i=$__FOR_START_1255089834__;$i < $__FOR_END_1255089834__;$i+=1){ ?><fieldset>
			<h2>最新会员</h2>
			<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['id']); ?>" target="_blank"><img src="<?php echo ($user[$i]['head_photo']); ?>" height="100" width="125"/></a>	
			<p><?php echo ($user[$i]['nickname']); ?></p>
			<p><?php echo ($user[$i]['home']); ?></p>
		</fieldset><?php } ?>
 </body>
</html>