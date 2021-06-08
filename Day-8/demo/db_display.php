<?php 
	$host = "localhost:3308";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

	$q = mysqli_query($connection,
		"select * from tbl_user where is_delete = 0") or die("Error". mysqli_error($connection));

	echo "<table>";
	echo "<tr>";
	echo "<td>Id</td>";
	echo "<td>Name</td>";
	echo "<td>Gender</td>";
	echo "<td>Mobile</td>";
	echo "<td>Action</td>";
	echo "</tr>";
	while ($row = mysqli_fetch_array($q)) {
		echo "<tr>";
		echo "<td>{$row['user_id']}</td>";
		echo "<td>{$row['user_name']}</td>";
		echo "<td>{$row['user_gender']}</td>";
		echo "<td>{$row['user_mobile']}</td>";
		echo "<td> <a href='db_edit.php?id={$row['user_id']}'> Edit </a> | <a href='db_delete.php?deleteid={$row['user_id']}'> Delete </a> </td>";
		echo "</tr>";
	}
	echo "<tr> <td> <a href='db_add.php'> Add Record </a> </td> </tr>";
	echo "</table>";
?>