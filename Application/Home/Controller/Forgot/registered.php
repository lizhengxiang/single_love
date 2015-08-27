<?php
	require_once '../configs/sql_config.php';
	
	require_once'password.php';
	require_once'make_password.php';
	require_once'sendmail.php';
	require_once'members_id.php';

	$email = trim($_POST["email"]);
	$wechat = trim($_POST["wechat"]); 
	$type_name = $_POST["type_name"];
	$join_time = date("Y-m-d");
	$password = make_password(8);
  	$members_id = members_id();
	$encryption = password($password, $members_id);
	mysql_select_db("dating", $con);
	$sql = "INSERT INTO registered (email, members_id, weChat, type, password, join_time) 
 		VALUES ('$email', '$members_id', '$wechat', '$type_name', '$encryption', '$join_time')";
	
	//Judge  insert succeeded
	if (!mysql_query($sql,$con)){
  		die('Error: ' . mysql_error());
  	}else{
		$content = "membersid: ".$members_id."\n"."password: ".$password;
		$sendmail = sendmail($email, $content);
		if($sendmail){
			echo "sendmail ok!!";
		}else{
			echo "sendmail failure!!";
		}
			
	}
	mysql_close($con);
?>
