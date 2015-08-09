<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<div id="header"><h1>会员信息</h1></div>
  	<div id="content">
    <form action="./upload" enctype = "multipart/form-data" method="POST" enctype="multipart/form-data">
	<fieldset>
		<img src="<?php echo ($photo['head_ptoto']); ?>"height="200" width="200"/>
		<h2>ID: <?php echo ($photo['members_id']); ?></h2>
		<?php echo ($data['age']); ?>岁,<?php echo ($data['gender']); ?>,<?php echo ($data['schooling']); ?>学历,来自<?php echo ($data[home]); ?>,原籍<?php echo ($data['place']); ?>.</br>
		身  高:<?php echo ($data['height']); ?>    出生年月:<?php echo ($data['birth']); ?></br>
		月  薪:<?php echo ($data['income']); ?>	星座:<?php echo ($data['constellation']); ?></br>
		居住情况:<?php echo ($data['live']); ?>	血型:<?php echo ($data['type']); ?></br>
		购车情况:<?php echo ($data['car']); ?>		工作地域:<?php echo ($data['work']); ?>
	</fieldset>
	<br/>

	<fieldset>
 		<h2>內心独白:</h2>
		<?php echo ($lnner['lnner']); ?>
		
 	</fieldset>
 	<br/>

	<fieldset>
    	<h2>择偶条件</h2>
		年龄:<?php echo ($choose['agea']); ?> --<?php echo ($choose['ageb']); ?>	身高:<?php echo ($choose['heighta']); ?> -- <?php echo ($choose['heightb']); ?></br>
		学历:<?php echo ($choose['school']); ?> 婚姻状况:<?php echo ($choose['hunyin']); ?></br>
		有无照片:<?php echo ($choose['photo']); ?> 工作处所:<?php echo ($choose['work']); ?></br>
    </fieldset>
    <br />

	<fieldset>
    	<h2>外貌性格:</h2>
		身高:<?php echo ($data['height']); ?>cm 体重:<?php echo ($appearance['weight']); ?>kg</br>
		体型:<?php echo ($appearance['size']); ?> 健康状况:<?php echo ($appearance['health']); ?></br>
		外貌自评:<?php echo ($appearance['evaluation']); ?> 穿衣风格:<?php echo ($appearance['clothes']); ?></br>
		性格特征:<?php echo ($appearance['disposition']); ?> 脾气:<?php echo ($appearance['temper']); ?>
    </fieldset>
    <br />

    <fieldset>
    	<h2>工作学习</h2> 
		单位类型:<?php echo ($unit['unit']); ?> 职业职位:<?php echo ($unit['professional']); ?></br>
		工作状况:<?php echo ($unit['work']); ?> 工作调动:<?php echo ($unit['move']); ?></br>
		毕业学校:<?php echo ($unit['school']); ?> 专业类型:<?php echo ($unit['major']); ?></br>
		语言能力:<?php echo ($unit['language']); ?> 事业家庭:<?php echo ($unit['family']); ?></br>
    </fieldset>
    <br />

	<fieldset>
    	<h2>生活方式:</h2> 
		吸烟:<?php echo ($life['smoking']); ?> 饮酒:<?php echo ($life['drinking']); ?></br>
		锻炼习惯:<?php echo ($life['exercise']); ?> 饮食习惯:<?php echo ($life['diet']); ?></br>
		逛街购物:<?php echo ($life['shopping']); ?> 宗教信仰:<?php echo ($life['religious']); ?></br>
		作息时间:<?php echo ($life['worktime']); ?> 交际圈子:<?php echo ($life['social']); ?></br>
		最大消费:<?php echo ($life['consumption']); ?></br>
		家务水平等级:<?php echo ($life['home']); ?> 家务分配情况:<?php echo ($life['distributin']); ?></br>
		家中排行:<?php echo ($life['ranking']); ?> 父母情况:<?php echo ($life['parents']); ?></br>
		是否要孩子:<?php echo ($life['child']); ?> 考虑何时结婚:<?php echo ($life['married']); ?></br>
		宠物喜欢程度:<?php echo ($life['pet']); ?> 关于宠物:<?php echo ($life['petabout']); ?></br>
    </fieldset>
    <br />

    <fieldset>
    	<label for="user_pic">生活照五:</label> 
    </fieldset>
    <br />

    <fieldset>
    	<label for="user_pic">生活照六:</label> 
    </fieldset>
    <br />

    <fieldset class="center">
    	<input type="submit" value="上傳" />
    	<input type="reset" value="清除" />
    </fieldset>
   	</form>
 </div>

  <div id="footer"></div>
 </body>
</html>