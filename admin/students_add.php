	<?php
  	include 'includes/session.php';
	if(isset($_POST['add'])){
		$student_id = $_POST['student_id'];
		$fullname = $_POST['fullname'];
		$date = date("y-m-d");
		
		$query = $conn->query("SELECT * FROM ids WHERE student_id='$student_id'") or die ($conn->error);
		
		$count1 = $query->fetch_array();
		if ($count1 == 0) {
		$sql = "INSERT INTO ids (student_id, fullname, date) VALUES ('$student_id', '$fullname', '$date')";

				if($conn->query($sql)){
			$_SESSION['success'] = 'Student added successfully';

		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Student ID already registered';
	}
}

	header('location: ./student_reg.php');
	
?>