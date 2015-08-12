<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<a href="https://localhost/single_love/index.php/Home/Look/Look/index"><h1>关注系统</h1></a>
  	<div id="content">

	<fieldset>
 		<h2>谁看过我</h2>
		<?php $__FOR_START_970004061__=0;$__FOR_END_970004061__=$count;for($i=$__FOR_START_970004061__;$i < $__FOR_END_970004061__;$i+=1){ ?><fieldset>
				<h4>ID:<?php echo ($user[$i]['id']); ?></h4>
				<h4>浏览时间:<?php echo ($user[$i]['time']); ?></h4>
				<a href="https://localhost/single_love/index.php/Home/Email/reademail/index/userid/<?php echo ($count["email"][$i]["members_id_a"]); ?>/id/<?php echo ($count["email"][$i]["id"]); ?>"><button type="button"><h4>查看邮件</h4></button></a>
	    	</fieldset><?php } ?>
 	</fieldset>
 	<br/>

	<fieldset>
    	<h2>我浏览过的人</h2>
		 <?php $__FOR_START_1093779845__=0;$__FOR_END_1093779845__=$read['count'];for($i=$__FOR_START_1093779845__;$i < $__FOR_END_1093779845__;$i+=1){ ?><fieldset>
            	<h4>ID:<?php echo ($read["email"][$i]["members_id_b"]); ?></h4>
 	           	<h4>读信时间:<?php echo ($count["email"][$i]["time_b"]); ?></h4>
				 <a href="https://localhost/single_love/index.php/Home/Email/read/index/userid/<?php echo ($count["email"][$i]["members_id_a"]); ?>/id/<?php echo ($count ["email"][$i]["id"]); ?>"><button type="button"><h4>查看邮件</h4></button></a>
 	      	</fieldset><?php } ?>
    </fieldset>
    <br/>

	<fieldset>
    	<h2>谁关注我</h2>
		<?php $__FOR_START_157035516__=0;$__FOR_END_157035516__=$send['count'];for($i=$__FOR_START_157035516__;$i < $__FOR_END_157035516__;$i+=1){ ?><fieldset>
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