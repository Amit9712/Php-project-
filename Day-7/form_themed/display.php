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
				<h2 class="title"><a href="#">Welcome to View Registrations Page</a></h2>
				<p class="meta"><span class="date">june 1, 2021</span><span class="posted">Posted by <a href="#">Pratik</a></span></p>
			<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<?php 
					$host = "localhost:3308";
					$username = "root";
					$passwd = "";
					$dbname = "db_internship";

					$connection = mysqli_connect($host, $username, $passwd, $dbname);

					$q = mysqli_query($connection,
						"select * from tbl_student where is_delete = 0") or die("Error". mysqli_error($connection));

					echo "<table border='1px' style='border-style: solid; border-width: 2px'>";
					echo "<tr>";
					echo "<td>Name</td>";
					echo "<td>Email</td>";
					echo "<td>Mobile</td>";
					echo "<td colspan='2'>Action</td>";
					echo "</tr>";
					
					while ($row = mysqli_fetch_array($q)) {
						echo "<tr>";
						echo "<td>{$row['st_name']}</td>";
						echo "<td>{$row['st_email']}</td>";
						echo "<td>{$row['st_mobile']}</td>";
						echo "<td><a href='delete.php?deleteid={$row['st_id']}'> Delete </a></td>";
						echo "<td><a href='singleview.php?viewid={$row['st_id']}'> Details </td>";
						echo "</tr>";
					}
					echo "<tr><td><a href='displayall.php'> Full Details </a></td></tr>";
					echo "</table>";
				?>
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