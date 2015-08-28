<?php
	function sendmail($smtpemailto_1, $content){
		require_once "email.class.php";
		//******************** 配置信息 ********************************
		$smtpserver = "smtp.163.com";//SMTP服务器
		$smtpserverport =25;//SMTP服务器端口
		$smtpusermail = "m15308003217@163.com";//SMTP服务器的用户邮箱
		$smtpemailto = $smtpemailto_1;//trim($_POST['toemail']);//发送给谁
		$smtpuser = "m15308003217@163.com";//SMTP服务器的用户帐号
		$smtppass = "qrrzgfogvttgtjua";//SMTP服务器的用户密码
		$mailtitle = "重庆单身情缘";//邮件主题
		$mailcontent = "<h1>".$content."</h1>";//邮件内容
		$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
		//************************ 配置信息 ****************************
		$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
		$smtp->debug = false;//是否显示发送的调试信息
		$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);

		//echo "<div style='width:300px; margin:36px auto;'>";
		if($state){
			return 1;
		}else{
			return 0;
		}
		//echo "恭喜！邮件发送成功！！";
		//echo "<a href='index1.html'>点此返回</a>";
		//echo "</div>";
	}

?>
