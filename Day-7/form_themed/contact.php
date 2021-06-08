<html>
	<head>
		<title>Demo Template</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
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
					<h2 class="title"><a href="#">Welcome to Contact Page</a></h2>
					<p class="meta"><span class="date">May 28, 2021</span><span class="posted">Posted by <a href="#">Pratik</a></span></p>
					<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p>Welcome To Contact Page On our Web Site.</p>
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