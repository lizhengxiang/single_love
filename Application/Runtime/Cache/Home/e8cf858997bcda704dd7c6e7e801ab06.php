<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
 <div id="content">
 <fieldset>
  <img src="<?php echo ($data['head_photo']); ?>"height="200" width="200"/>
  <h2>ID: <?php echo ($data['members_id']); ?></h2>
  <?php echo ($data['age']); ?>岁,<?php echo ($data['gender']); ?>, <?php echo ($data['height']); ?>,<?php echo ($data['schooling']); ?>学历,来自<?php echo ($data[home]); ?>,原籍<?php echo ($data['place']); ?>.</br>
 </fieldset>
 <br/>

 <fieldset>
  <form action="email" method="post">
  <h2>发送邮件:</h2>
  <textarea  name="email" rows="8" cols="60">
  我是一個樂觀的男孩 ... ... ... ...
 </textarea>
 </br>
 <input type="submit" value="发送邮件">
 </fieldset>
 	<br/>
	</div>
 </body>
</html>