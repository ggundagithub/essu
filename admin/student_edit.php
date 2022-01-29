<?php
	include 'includes/session.php';
    include 'includes/session.php';
	  require 'dbcon.php';
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$student_id = $_POST['student_id'];
		$fullname = $_POST['fullname'];
		
		$sql = "SELECT * FROM ids WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

         	$query = $conn->query("SELECT * FROM ids WHERE student_id='$student_id'") or die ($conn->error);
			$count = $query->fetch_array();
	if ($count  < 0){
				$_SESSION['error'] = 'Invalid student ID';
	}
	else{
		$query = $conn->query("SELECT * FROM ids WHERE student_id ='$student_id'") or die ($conn->error);
		$count1 = $query->fetch_array();
	
		if ($count1 == 0 ) {
		$sql = "UPDATE `ids` SET `student_id`='$student_id', `fullname`='$fullname' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter updated successfully';
		}
		
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Student ID already registered';
	}
	}
	}
	header('location: voters.php');

?>