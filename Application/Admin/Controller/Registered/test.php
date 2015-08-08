<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


	require_once'password.php';
	//require_once'members_id.php';
	require_once'make_password.php';
	require_once'sendmail.php';
	////require_once'members_id.php';

	//$email = trim($_POST["email"]);
	//$wechat = trim($_POST["wechat"]); 
	//$type_name = $_POST["type_name"];
	$join_time = date("Y-m-d");
	//$password = make_password(10);

	mysql_select_db("dating", $con);
/*	
	$query = mysql_query("SELECT * FROM registered");
	$num = mysql_num_rows($query);
 	$result = mysql_query("SELECT members_id FROM registered WHERE id = $num");
	
	$result = mysql_query("select members_id from registered order by id DESC limit 1");
 	$row = mysql_fetch_array($result);
 	$num_id = $row['members_id'];
	$num_id = substr($num_id,4,4) + 1;
	$num_id = sprintf("%04d", $num_id);
	$num = date("ym");
  	$time = time();
	$time = substr($time, -2);
	$time = sprintf("%02d", $time);
  	$members_id =1;// members_id();
	
	
	$encryption = password($password, $members_id);
	/*
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
			
	}*/
	mysql_close($con);

?>
