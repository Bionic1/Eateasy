<?php
	//$c = new mysqli("localhost", "root", "", "user"); //new mysqli(database_server, db_username, db_password, database_name);
	$c = mysqli_connect("localhost", "root", "", "user");
	if(mysqli_connect_errno($c)) {
		echo "Error Occured: ".mysqli_error($c);
	}

?>