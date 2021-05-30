<?php

$number = 7;
$factorial = 1;
$i=1;

for($i=$number; $i >= 1; $i--) {
	$factorial *= $i;
}

echo "The Factorial of Number $number is $factorial.";
?>