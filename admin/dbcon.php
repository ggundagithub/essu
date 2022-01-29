<?php
	$conn = new mysqli('localhost', 'root', '', 'votesystem');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	