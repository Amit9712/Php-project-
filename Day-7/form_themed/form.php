<html>
	<head>
		<title>Demo Template</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<style type="text/css">
			td {
				width: 300px;
				align-items: center;
			}
		</style>
	</head>
<body>
<?php 
	include 'nevbar.html';
	include 'logo.html';
?>
<div id="wrapper"> 
	<div id="page-bgtop"></div>
		<div id="page">
			<?php 
				include 'image.html';
			?>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Welcome to Registration Page</a></h2>
				<p class="meta"><span class="date">june 1, 2021</span><span class="posted">Posted by <a href="#">Pratik</a></span></p>
			<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<form method="post">
						<table align="center">
							<tr>
								<td>Name :</td>
								<td><input type="text" name="txt1" /> <br/> <br/></td>
							</tr>
							<tr>
								<td>Email : </td>
								<td><input type="email" name="txt2" /><br/> <br/></td>
							</tr>
							<tr>
								<td>Mobile : </td>
								<td><input type="Number" name="txt3" /><br/> <br/></td>
							</tr>
							<tr>
								<td>Password : </td>
								<td><input type="password" name="txt4" /><br/> <br/></td>
							</tr>
							<tr>
								<td>Date of Birth : </td>
								<td><input type="date" name="txt5" /><br/> <br/></td>
							</tr>
							<tr>
								<td>Gender : </td>
								<td><select name="txt6">
									<option value="Male">Male</option>
									<option value="Female">Female</option></select></td>
							</tr>
							<tr>
								<td>Blood Group : </td>
								<td><input type="text" name="txt7" /><br/> <br/></td>
							</tr>
							<tr>
								<td>Address : </td>
								<td><textarea name="txt8" cols="50" rows="5"></textarea><br/> <br/></td>
							</tr>
							<tr>
								<td>Area : </td>
								<td><input type="text" name="txt9" /><br/> <br/></td>
							</tr>
							<tr>
								<td>Pincode : </td>
								<td><input type="Number" name="txt10"><br/> <br/></td>
							</tr>
							<tr>
								<td><input type="submit" /></td>
								<td><input type="reset" /></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<?php
			include 'sidebar.html';
		?>
		<div style="clear: both;">&nbsp;</div>
		</div>
	<div id="page-bgbtm"></div>
</div>
<?php 
	include 'footer.html';
?>
</body>
</html>

<?php 
	$host = "localhost:3308";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

if ($_POST) {
	$name  = $_POST['txt1'];
	$email = $_POST['txt2'];
	$mobile = $_POST['txt3'];
	$passwd = $_POST['txt4'];
	$dob = $_POST['txt5'];
	$gender = $_POST['txt6'];
	$bgrp = $_POST['txt7'];
	$address = $_POST['txt8'];
	$area = $_POST['txt9'];
	$pincode = $_POST['txt10'];

	$q = mysqli_query($connection,
		"insert into tbl_student(st_name,st_email,st_mobile,st_passwd,st_dob,st_gender,st_bgrp,st_address,st_area,st_pincode) 
		values('{$name}','{$email}','{$mobile}','{$passwd}','{$dob}','{$gender}','{$bgrp}','{$address}','{$area}','{$pincode}')") 
		or die("Error". mysqli_error($connection));

	if($q){
		echo "<script>alert('Record Added');</script>";
	}
}
?>