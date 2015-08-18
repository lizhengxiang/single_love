<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<a href="https://localhost/single_love/index.php/Home/Email/Lookemail/index"><h1>邮件系统</h1></a>
  	<div id="content">

	<fieldset>
 		<h2>收件箱(未读):(<?php echo ($count['count']); ?>)</h2>
		<?php $__FOR_START_578367734__=0;$__FOR_END_578367734__=$count['count'];for($i=$__FOR_START_578367734__;$i < $__FOR_END_578367734__;$i+=1){ ?><fieldset>
				<h4>ID:<?php echo ($count["email"][$i]["members_id_a"]); ?></h4>
				<h4>收信时间:<?php echo ($count["email"][$i]["time_a"]); ?></h4>
				<a href="https://localhost/single_love/index.php/Home/Email/reademail/index/userid/<?php echo ($count["email"][$i]["members_id_a"]); ?>/id/<?php echo ($count["email"][$i]["id"]); ?>"><button type="button"><h4>查看邮件</h4></button></a>
	    	</fieldset><?php } ?>
 	</fieldset>
 	<br/>

	<fieldset>
    	<h2>收件箱(已读):(<?php echo ($read['count']); ?>)</h2>
		 <?php $__FOR_START_544267749__=0;$__FOR_END_544267749__=$read['count'];for($i=$__FOR_START_544267749__;$i < $__FOR_END_544267749__;$i+=1){ ?><fieldset>
            	<h4>ID:<?php echo ($read["email"][$i]["members_id_a"]); ?></h4>
 	           	<h4>读信时间:<?php echo ($read["email"][$i]["time_b"]); ?></h4>
				 <a href="https://localhost/single_love/index.php/Home/Email/read/index/userid/<?php echo ($read["email"][$i]["members_id_a"]); ?>/id/<?php echo ($read["email"][$i]["id"]); ?>"><button type="button"><h4>查看邮件</h4></button></a>
 	      	</fieldset><?php } ?>
    </fieldset>
    <br/>

	<fieldset>
    	<h2>已发送:(<?php echo ($send['count']); ?>)</h2>
		<?php $__FOR_START_476217447__=0;$__FOR_END_476217447__=$send['count'];for($i=$__FOR_START_476217447__;$i < $__FOR_END_476217447__;$i+=1){ ?><fieldset>
          		<h4>ID:<?php echo ($send["email"][$i]["members_id_b"]); ?></h4>
 				<h4>发送时间:<?php echo ($send["email"][$i]["time_a"]); ?></h4>
				<h4>对方:
					<?php if($send['email'][$i]['state']): ?>已读
					<?php else: ?>未读<?php endif; ?>
				</h4>
				<a href="https://localhost/single_love/index.php/Home/Email/Send/index/userid/<?php echo ($send["email"][$i]["members_id_b"]); ?>/id/<?php echo ($send["email"][$i]["id"]); ?>"><button type="button"><h4>查看邮件</h4></button></a>
 			</fieldset><?php } ?>

    </fieldset>
    <br/>
   	</form>
 </div>

  <div id="footer"></div>
 </body>
</html>