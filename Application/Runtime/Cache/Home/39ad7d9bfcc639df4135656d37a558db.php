<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<a href="https://localhost/single_love/index.php/Home/Email/Lookemail/index"><h1>邮件系统</h1></a>
  	<div id="content">

	<fieldset>
 		<h2>收件箱(未读):(<?php echo ($count['count']); ?>)</h2>
		<?php $__FOR_START_707256997__=0;$__FOR_END_707256997__=$end_val;for($i=$__FOR_START_707256997__;$i < $__FOR_END_707256997__;$i+=1){ ?><fieldset>
				<h4>ID:<?php echo ($count["email"][$i]["members_id_a"]); ?></h4>
				<h4>发送时间:<?php echo ($count["email"][$i]["time_a"]); ?></h4>
	    	</fieldset><?php } ?>
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