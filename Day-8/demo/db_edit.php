<?php 
if(!isset($_GET['id']) || empty($_GET['id'])) {
	header("location:db_display.php");
}
	$host = "localhost:3308";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

	$id = $_GET['id'];

	$q = mysqli_query($connection,
		"select * from tbl_user where user_id='{$id}'") or die("Error". mysqli_error($connection));

	$row = mysqli_fetch_array($q);

if ($_POST) {
	$name = $_POST['txt1'];
	$gender = $_POST['txt2'];
	$mobile = $_POST['txt3'];

	$qd = mysqli_query($connection,
		"update tbl_user set user_name='{$name}',user_gender='{$gender}',user_mobile='{$mobile}' where user_id='{$id}'") or die("Error". mysqli_error($connection));

	if($qd){
		echo"<script>alert('Record Updated'); window.location='db_display.php';</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Add To Database	</title>
</head>
<body>
	<form method="post">
		Name : <input type="text" name="txt1" value="<?php echo $row['user_name']; ?>" />
		Gender : <select name="txt2">
					<option value="Male" <?php if($row['user_gender']=="Male"){ echo "selected"; } ?> >Male</option>
					<option value="Female" <?php if($row['user_gender']=="Female"){ echo "selected"; } ?> >Female</option>
				</select>
		Mobile : <input type="Number" name="txt3" value="<?php echo $row['user_mobile']; ?>" />
		<input type="submit" />
		<a href='db_display.php'> View Records </a>
	</form>
</body>
</html>