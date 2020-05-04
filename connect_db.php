<?php

$mysqli = new mysqli("localhost", "root", "", "food");

if ($mysqli -> connect_errno){
	echo "Failed to connect to MySql: " . $mysqli -> connect_error;
	exit();
}

if ($result = $mysqli -> query("SELECT * FROM oc_country")) {
	echo "Returned rows are: " .$result ->num_rows;

	$result -> free_result();
}

$mysqli -> close();