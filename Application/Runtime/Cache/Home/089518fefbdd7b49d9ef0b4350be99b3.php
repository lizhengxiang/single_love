<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<a href="https://localhost/single_love/index.php/Home/Email/Lookemail/index"><h1>邮件系统</h1></a>
  	<div id="content">
	<h2>收件箱</h2>
	<fieldset>
 		<h2>ID:<?php echo ($email[0]['members_id_a']); ?></h2>
		<h3>发送时间:<?php echo ($email[0]['time_a']); ?></h3>
		<h3>内容:</h3><?php echo ($email[0]['content']); ?>
 	</fieldset>
 	<br/>
 </body>
</html>