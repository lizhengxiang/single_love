<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<a href="https://localhost/single_love/index.php/Home/Look/Look/index"><h1>关注系统</h1></a>
  	<div id="content">

	<fieldset>
 		<h2>谁看过我</h2>
		以下的<?php echo ($count); ?>位会员最近看了你,有心动的吗?
		<?php $__FOR_START_149526100__=0;$__FOR_END_149526100__=$count;for($i=$__FOR_START_149526100__;$i < $__FOR_END_149526100__;$i+=1){ ?><fieldset>
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
		你浏览了以下的<?php echo ($Seenuser); ?>位会员
		<?php $__FOR_START_432492902__=0;$__FOR_END_432492902__=$Seenuser;for($i=$__FOR_START_432492902__;$i < $__FOR_END_432492902__;$i+=1){ ?><fieldset>
				<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($seen[$i]['id']); ?>" target="_blank"><img src="<?php echo ($seen[$i]['head_photo']); ?>" height="100" width="125"/></a>
	    	</br>
			<?php echo ($seen[$i]['nickname']); ?></br>
			<?php echo ($seen[$i]['age']); ?>岁&nbsp;<?php echo ($user[$i]['height']); ?>cm</br>
			<?php echo ($seen[$i]['professional']); ?><br>
			<?php echo ($seen[$i]['home']); ?></br>
			浏览时间:<?php echo ($seen[$i]['time']); ?></br>
			</fieldset><?php } ?>
    </fieldset>
    <br/>

	<fieldset>
    	<h2>谁关注我</h2>
		<?php echo ($Follower['count']); ?>位会员关注你
		<?php $__FOR_START_635671997__=0;$__FOR_END_635671997__=$Follower['count'];for($i=$__FOR_START_635671997__;$i < $__FOR_END_635671997__;$i+=1){ ?><fieldset>
				<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($Follower[$i]['id']); ?>" target="_blank"><img src="<?php echo ($Follower[$i]['head_photo']); ?>" height="100" width="125"/></a>
	    	</br>
			<?php echo ($Follower[$i]['nickname']); ?></br>
			<?php echo ($Follower[$i]['age']); ?>岁&nbsp;<?php echo ($Follower[$i]['height']); ?>cm</br>
			<?php echo ($Follower[$i]['professional']); ?><br>
			<?php echo ($Follower[$i]['home']); ?></br>
			关注时间:<?php echo ($Follower[$i]['time']); ?></br>
			</fieldset><?php } ?>
    </fieldset>
    <br/>
<fieldset>
    	<h2>谁关注我</h2>
		我关注<?php echo ($Following['count']); ?>位会员
		<?php $__FOR_START_1849198175__=0;$__FOR_END_1849198175__=$Following['count'];for($i=$__FOR_START_1849198175__;$i < $__FOR_END_1849198175__;$i+=1){ ?><fieldset>
				<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($Following[$i]['id']); ?>" target="_blank"><img src="<?php echo ($Following[$i]['head_photo']); ?>" height="100" width="125"/></a>
	    	</br>
			<?php echo ($Following[$i]['nickname']); ?></br>
			<?php echo ($Following[$i]['age']); ?>岁&nbsp;<?php echo ($Following[$i]['height']); ?>cm</br>
			<?php echo ($Following[$i]['professional']); ?><br>
			<?php echo ($Following[$i]['home']); ?></br>
			关注时间:<?php echo ($Following[$i]['time']); ?></br>
			</fieldset><?php } ?>

    </fieldset>
 
 </div>

  <div id="footer"></div>
 </body>
</html>