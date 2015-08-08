<?php
	function password($key, $members_id){
		return crypt($key, $members_id);
	}
?>
