<?php
	require 'dbcon.php';
	session_start(); 
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if (!isset($_SESSION['User_ID']) || (trim($_SESSION['User_ID']) == '')) { ?>
		<script>
			window.location = "home.php";
		</script>
<?php 
	}
		$session_id=$_SESSION['User_ID'];
		$user_query = $conn->query("SELECT * FROM tbl_login WHERE User_ID = '$session_id'") or die(mysqli_errno());
		$user_row = $user_query->fetch_array();
		$user_username = $user_row['firstname']." ".$user_row['lastname'];
?>