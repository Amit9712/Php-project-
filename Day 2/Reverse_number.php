<?php

$mainnumber = 7360736;
$number = $mainnumber;
$reversenum = 0;
$reminder = 0;
$i=0;

for($i=0; $number > 1; $i++) {
	$reminder = $number%10;
	$reversenum = ($reversenum * 10) + $reminder;
	$number /= 10;
}

echo "The Reverse Number of $mainnumber is $reversenum.";

?>