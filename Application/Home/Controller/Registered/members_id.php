<?php
	function members_id($num_id){
		//$con = mysql_connect("localhost","root","");
  	    //mysql_select_db("dating", $con);
		//echo $result = mysql_query("select members_id from think_registered order by id DESC limit 1");
 		//$row = mysql_fetch_array($result);
 		//$num_id = $row['members_id'];
		$current_month = substr($num_id,2,2);
		if($current_month == 12){
			$current_month = 1;
		}else{
			$current_month += 1;
		}
		$num_id = substr($num_id,4,4) + 1;
		$num = date("ym");
		$month = date("m");
		if($current_month == $month){
			$num_id = 1;
		} 
		$num_id = sprintf("%04d", $num_id);
  		$time = time();
		$time = substr($time, -2);
		$time = sprintf("%02d", $time);
  		return $members_id = $num.$num_id.$time;
	}
?>
