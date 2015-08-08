<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<div id="header"><h1>个人主页</h1></div>
  	<div id="content">
	<fieldset>
		<h2>最新会员</h2>
		<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user['id']); ?>"><img src="<?php echo ($user['head_photo']); ?>"/></a>	
	</fieldset>
 </body>
</html>