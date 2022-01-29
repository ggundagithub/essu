<?php
	include 'includes/session.php';
	  require 'dbcon.php';
	if(isset($_POST['add'])){
		$student_id = $_POST['student_id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$gmail = $_POST['gmail'];
		$gender = $_POST['gender'];
		$yearlevel = $_POST['yearlevel'];
		$course = $_POST['course'];
		$date = date("y-m-d H:i:s");
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		
					$query = $conn->query("SELECT * FROM ids WHERE student_id='$student_id'") or die ($conn->error);
			$count = $query->fetch_array();
	if ($count  < 1){
				$_SESSION['error'] = 'Invalid student ID';
	}
	else{
		$query = $conn->query("SELECT * FROM voters WHERE student_id ='$student_id'") or die ($conn->error);
		$count1 = $query->fetch_array();
		if ($count1 == 0) {
		$sql = "INSERT INTO voters (student_id, password, firstname, lastname, gmail, gender, yearlevel, course, status, date, photo) VALUES ('$student_id', '$password', '$firstname', '$lastname', '$gmail', '$gender', '$yearlevel', '$course', 'Unvoted', '$date', '$filename')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	
	}else{
		$_SESSION['error'] = 'Student ID already registered';
	}
	}
	}

	header('location: ../login_form.php');
?>