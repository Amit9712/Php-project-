<!DOCTYPE html>
<html>
<head>
	<title>Display Values</title>
</head>
<body>
	<form method="post">
		<h2> Select Char : </h2>
		<?php
			$char = range('A','Z');
			echo "<select name='opt'>";
			foreach ($char as $value)
			{
				echo "<option value=".$value.">$value</option>";
			}
			echo "</select>";
		?>
		<input type="submit">
	</form>
</body>
</html> 

<?php
$arr = array(
	//'A' => "APPLE",
	'B' => "BALL",
	'C' => "CAT",
	//'D' => "DOG",
	'E' => "EGG",
	'F' => "FISH",
	//'G' => "GRAPE",
	'H' => "HAND",
	'I' => "INSECT",
	//'J' => "JUG",
	'K' => "KITE",
	'L' => "LION",
	//'M' => "MOON",
	'N' => "NEST",
	'O' => "ORANGE",
	//'P' => "PEACOCK",
	'Q' => "QUEEN",
	'R' => "RABBIT",
	//'S' => "SHIP",
	'T' => "TIGER",
	'U' => "UMBRELLA",
	//'V' => "VAN",
	'W' => "WATCH",
	'X' => "X-RAY",
	//'Y' => "YAK",
	'Z' => "ZEBRA" );

if($_POST)
{
	$ch = $_POST['opt'];
	if (array_key_exists($ch, $arr)) {
		echo "<b>$ch</b> For <b>$arr[$ch]</b>.";
	} else {
		echo "Array Index <b>$ch</b> Is Not Avaliable. Use Other One.";
	}
}
?>