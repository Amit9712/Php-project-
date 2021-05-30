<?php
$mainnumber = 7360736;
$number = $mainnumber;
$sum = 0;
$reminder = 0;
$i=0;

for($i=0; $i <= strlen($number); $i++) {
	$reminder = $number%10;
	$sum += $reminder;
	$number /= 10;
}

echo "The Sum of Degit $mainnumber is $sum.";

?>