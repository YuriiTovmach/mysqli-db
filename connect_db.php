<?php

$mysqli = new mysqli("localhost", "root", "", "food");

if ($mysqli -> connect_errno){
	echo "Failed to connect to MySql: " . $mysqli -> connect_error;
	exit();
}

// if ($result = $mysqli -> query("SELECT * FROM oc_country")) {
// 	echo "Returned rows are: " .$result ->num_rows . "<br>";

// $query = "SELECT name FROM oc_country";
// 	if ($result = $mysqli->query($query)){
// 		// while($row = $result->fetch_row()){
// 			// printf("%s (%s)\n", $row[0], $row[1]);
// 			// echo 'Страна: ' .$row[0]. "<br>";

// 			while($row = $result->fetch_array()){
// 				echo 'Страна: ' .$row[0]. "<br>";
// 		}
// 	}	

if ($result = $mysqli-> query("SELECT country_id, name FROM oc_country ")) {
	// $row = $result-> fetch_assoc();
	// printf ("%s (%s)\n", $row["country_id"], $row["name"]);

	
		 while($row = $result->fetch_assoc()){
			echo $row["country_id"] . " " .$row["name"] .'<br>' ;
		}
			
// }


	$result -> free_result();
}

$mysqli -> close();