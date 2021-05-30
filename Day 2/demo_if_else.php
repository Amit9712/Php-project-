<?php

$a = 13;
$b = 20;

if($a < ($b/$a)) {
	echo "Value of A is Too Small";
} else if($b < $a) {
	echo "Value of B is Smaller Than A";
} else if($a < $b) {
	echo "Value of A is Smaller Than B";
} else {
	echo "Values of A and B are Same!";
}

?>