<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<a href = "https://localhost/single_love/index.php/Home/Home/Home/index"><button><h3>个人主页</h3></button></a>
  	<div id="content">

	<fieldset>
 		<h2>收到礼物</h2>

		<?php $__FOR_START_24866147__=0;$__FOR_END_24866147__=$count;for($i=$__FOR_START_24866147__;$i < $__FOR_END_24866147__;$i+=1){ ?><fieldset>
			<img src="<?php echo ($giftroat[$i][road]); ?>" height="200" width="200"/></br>
			礼物名称:<?php echo ($giftroat[$i]['name']); ?>赠送时间<?php echo ($gift['user'][$i]['time']); ?></br>
			赠送人:<?php echo ($user[$i]['members_id']); ?></br>
			<?php echo ($user[$i]['age']); ?>岁,<?php echo ($user[$i]['gender']); ?>,
			<?php echo ($user[$i]['marriage']); ?>,
			<?php echo ($user[$i]['home']); ?>,
			<?php echo ($user[$i]['place']); ?></br>
			留言:<?php echo ($gift['user'][$i]['content']); ?>
			</fieldset><?php } ?>
 	</fieldset>
	<fieldset>
 		<h2>已发送礼物</h2>

		<?php $__FOR_START_1906549589__=0;$__FOR_END_1906549589__=$count1;for($i=$__FOR_START_1906549589__;$i < $__FOR_END_1906549589__;$i+=1){ ?><fieldset>
			<img src="<?php echo ($giftroat1[$i][road]); ?>" height="200" width="200"/></br>
			礼物名称:<?php echo ($giftroat1[$i]['name']); ?>赠送时间<?php echo ($gift1['user'][$i]['time']); ?></br>
			赠送人:<?php echo ($user1[$i]['members_id']); ?></br>
			<?php echo ($user1[$i]['age']); ?>岁,<?php echo ($user1[$i]['gender']); ?>,
			<?php echo ($user1[$i]['marriage']); ?>,
			<?php echo ($user1[$i]['home']); ?>,
			<?php echo ($user1[$i]['place']); ?></br>
			留言:<?php echo ($gift1['user'][$i]['content']); ?>
			</fieldset><?php } ?>
 	</fieldset>
 	<br/>

  <div id="footer"></div>
 </body>
</html>