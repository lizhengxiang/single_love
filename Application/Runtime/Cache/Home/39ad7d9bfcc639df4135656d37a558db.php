<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<a href="https://localhost/single_love/index.php/Home/Email/Lookemail/index"><h1>邮件系统</h1></a>
  	<div id="content">

	<fieldset>
 		<h2>收件箱(未读):(<?php echo ($count); ?>)</h2>
 	</fieldset>
 	<br/>

	<fieldset>
    	<h2>收件箱(已读):(<?php echo ($read); ?>)</h2>
    </fieldset>
    <br/>

	<fieldset>
    	<h2>已发送:(<?php echo ($send); ?>)</h2>
    </fieldset>
    <br/>
   	</form>
 </div>

  <div id="footer"></div>
 </body>
</html>