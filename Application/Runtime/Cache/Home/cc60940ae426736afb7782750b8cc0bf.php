<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<div id="header"><h1>个人主页</h1></div>
  	<div id="content">
	<fieldset>
		<h2>最新会员</h2>
		<a target= "_balnk" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user_1['id']); ?>"><img src="<?php echo ($user_1['head_photo']); ?>"/></a>	
		<p><?php echo ($user_1['nickname']); ?></p>
		<p><?php echo ($user_1['home']); ?></p>
	</fieldset>
	<fieldset>
		<h2>最新会员</h2>
		<a target= "_balnk" href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user_2['id']); ?>"><img src="<?php echo ($user_2['head_photo']); ?>"/></a>	
		<p><?php echo ($user_2['nickname']); ?></p>
		<p><?php echo ($user_2['home']); ?></p>
	</fieldset>
 </body>
</html>