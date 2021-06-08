<?php 
	$host = "localhost:3308";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	//connection function
	$connection = mysqli_connect($host, $username, $passwd, $dbname);

	//query
	$q = mysqli_query($connection,
		"select * from tbl_user") or die("Error". mysqli_error($connection));

	//below funtion will fetch data as numerical array
	$row = mysqli_fetch_row($q);

	//debug
	print_r($row);

	echo "<br/>".$row[0].$row[1].$row[2].$row[3];

	//
	$row = mysqli_fetch_array($q);
	echo "<pre>";
	print_r($row);

	echo "<br/>".$row[0].$row[1].$row[2].$row[3];
	
	echo "<br/>".$row['user_id'].$row['user_name'].$row['user_gender'].$row['user_mobile'];
?> 

