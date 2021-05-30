<?php
$a = array(array (1, 2, 3),array (1, 2, 3),array (1, 2, 3),);
$b = array(array (1, 2, 3),array (1, 2, 3),array (1, 2, 3),);

$rows = count($a);
$cols = count($a[0]);
$sum = array_fill(0, $cols, array_fill(0, $rows, 0));

for ($i = 0; $i < $rows; $i++){
	for ($j = 0; $j < $cols; $j++){
		$sum[$i][$j] = $a[$i][$j] + $b[$i][$j];
	}
}

echo "Addition of two matrix <br>";
for ($i = 0; $i < $rows; $i++){
	for ($j = 0; $j < $cols; $j++){
		echo $sum[$i][$j]." ";
	}
	echo "<br>";
}
?>