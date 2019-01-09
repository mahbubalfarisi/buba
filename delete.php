<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bubadex";
	$delname = $_GET['name'];

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	// sql to delete a record
	$sql = "DELETE FROM pokecol WHERE name = \"$delname\" LIMIT 1"; 

	if (mysqli_query($conn, $sql)) {
	    mysqli_close($conn);
	    header('Location: ./pokemon-go.php'); //If book.php is your main page where you list your all records
	    exit;
	} else {
    	echo "Error deleting record";
	}

	$conn->close();
?>