<?php

$number = 736;
$i = 2;
$flag = 0;

if ($number <= 1) {
		echo "Given Number $number is Not a Prime Number.";
		exit;
	}
	
for($i; $i <= ($number/2); $i++) {
	if(($number % $i )== 0) {
		$flag = 1;
		break;
	}	
}

if($flag == 0) {
	echo "Given Number $number is a Prime Number.";
} else {
	echo "Given Number $number is Not a Prime Number.";
}

?>