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
			include 'content.html';
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