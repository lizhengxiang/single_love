<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<a href="https://localhost/single_love/index.php/Home/Look/Look/index"><h1>关注系统</h1></a>
  	<div id="content">

	<fieldset>
 		<h2>谁看过我</h2>
		以下的<?php echo ($count); ?>会员最近看了你,有心动的吗?
		<?php $__FOR_START_21951159__=0;$__FOR_END_21951159__=$count;for($i=$__FOR_START_21951159__;$i < $__FOR_END_21951159__;$i+=1){ ?><fieldset>
				<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user[$i]['id']); ?>" target="_blank"><img src="<?php echo ($user[$i]['head_photo']); ?>" height="100" width="125"/></a>
	    	</br>
			<?php echo ($user[$i]['nickname']); ?></br>
			<?php echo ($user[$i]['age']); ?>岁&nbsp;<?php echo ($user[$i]['height']); ?>cm</br>
			<?php echo ($user[$i]['professional']); ?><br>
			<?php echo ($user[$i]['home']); ?></br>
			浏览时间:<?php echo ($user[$i]['time']); ?></br>
			</fieldset><?php } ?>
 	</fieldset>
 	<br/>

	<fieldset>
    	<h2>我浏览过的人</h2>
		 <?php $__FOR_START_1351213724__=0;$__FOR_END_1351213724__=$read['count'];for($i=$__FOR_START_1351213724__;$i < $__FOR_END_1351213724__;$i+=1){ ?><fieldset>
            	<h4>ID:<?php echo ($read["email"][$i]["members_id_b"]); ?></h4>
 	           	<h4>读信时间:<?php echo ($count["email"][$i]["time_b"]); ?></h4>
				 <a href="https://localhost/single_love/index.php/Home/Email/read/index/userid/<?php echo ($count["email"][$i]["members_id_a"]); ?>/id/<?php echo ($count ["email"][$i]["id"]); ?>"><button type="button"><h4>查看邮件</h4></button></a>
 	      	</fieldset><?php } ?>
    </fieldset>
    <br/>

	<fieldset>
    	<h2>谁关注我</h2>
		<?php $__FOR_START_1545897346__=0;$__FOR_END_1545897346__=$send['count'];for($i=$__FOR_START_1545897346__;$i < $__FOR_END_1545897346__;$i+=1){ ?><fieldset>
          		<h4>ID:<?php echo ($send["email"][$i]["members_id_b"]); ?></h4>
 				<h4>发送时间:<?php echo ($send["email"][$i]["time_a"]); ?></h4>
				<h4>对方:
					<?php if($send['email'][$i]['state']): ?>已读
					<?php else: ?>未读<?php endif; ?>
				</h4>
				<a href="https://localhost/single_love/index.php/Home/Email/Send/index/userid/<?php echo ($count["email"][$i]["members_id_a"]); ?>/id/<?php echo ($count ["email"][$i]["id"]); ?>"><button type="button"><h4>查看邮件</h4></button></a>
 			</fieldset><?php } ?>

    </fieldset>
    <br/>
   	</form>
 </div>

  <div id="footer"></div>
 </body>
</html>