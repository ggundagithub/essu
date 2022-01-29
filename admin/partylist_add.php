<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$party = $_POST['party'];
		
		

		$sql = "SELECT * FROM partylist ORDER BY priority DESC LIMIT 1";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		$priority = $row['priority'] + 1;
		
				$query = $conn->query("SELECT * FROM partylist WHERE party ='$party'") or die ($conn->error);
				
				$count1 = $query->fetch_array();
		if ($count1 == 0) {
		$sql = "INSERT INTO partylist (party, priority) VALUES ('$party', '$priority')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Partylist added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Description already registered';
	}
}
	header('location: partylist.php');
?>