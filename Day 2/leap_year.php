<?php

$year = 1948;

if(($year%4 == 0)&&($year%100 != 0)||($year%400 == 0)) {
	echo "The Year $year is a Leap-Year.";
} else {
	echo "The Year $year is Not a Leap-Year.";
}
?>