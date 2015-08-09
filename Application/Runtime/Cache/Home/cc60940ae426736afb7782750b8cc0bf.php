<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<ul>
  		<li><a href = "https://localhost/single_love/index.php/Home/Home/Home/index"><h1>个人主页</h1></a></li>
  		<li><a href="https://localhost/single_love/index.php/Home/Information/Information/index" target="_blank"><h1>修改资料</h1></a></li>
	</ul>

  	<div id="content">
	<fieldset>
		<h2>最新会员</h2>
		<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user_1['id']); ?>" target="_blank"><img src="<?php echo ($user_1['head_photo']); ?>" height="100" width="125"/></a>	
		<p><?php echo ($user_1['nickname']); ?></p>
		<p><?php echo ($user_1['home']); ?></p>
	</fieldset>
	<fieldset>
		<h2>最新会员</h2>
		<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user_2['id']); ?>" target="_blank"><img src="<?php echo ($user_2['head_photo']); ?>"height="100" width="120"/></a>	
		<p><?php echo ($user_2['nickname']); ?></p>
		<p><?php echo ($user_2['home']); ?></p>
	</fieldset>
 </body>
</html>