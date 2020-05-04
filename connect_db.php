<?php

$mysqli = new mysqli("localhost", "root", "", "food");

if ($mysqli -> connect_errno){
	echo "Failed to connect to MySql: " . $mysqli -> connect_error;
	exit();
}

if ($result = $mysqli -> query("SELECT * FROM oc_country")) {
	echo "Returned rows are: " .$result ->num_rows . "<br>";

$query = "SELECT name FROM oc_country";
	if ($result = $mysqli->query($query)){
		while($row = $result->fetch_row()){
			// printf("%s (%s)\n", $row[0], $row[1]);
			echo 'Страна: ' .$row[0]. "<br>";
		}
	}	


	$result -> free_result();
}

$mysqli -> close();