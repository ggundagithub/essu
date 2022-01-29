<?php
	<?php
	$server = "sql313.epizy.com";
    $username = "epiz_30858233";
    $password = "p5YVlWZco8yb";
    $dbname = "";

    $conn = mysql_connect($server, $username, $password, $dbname);

    if(!$conn){
        die("Connecton Failed:".mysql_connect_error());

    }
?>
	
?>