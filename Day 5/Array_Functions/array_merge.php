<?php
$a = array(
	'Name' => "Pratik_Patel",
	'Usr_Name' => "pratik736",
	'Mobile' => 12457890,
	'Address' => "ten",
	'Task' => "Php_Functions",
);
$b=array(10,20,21,23,17,10,20,21,23,10,15,20,21,20);
echo "<pre> A ";
print_r($a);
echo "<pre> B ";
print_r($b);
echo "<pre> Mered ";
print_r(array_merge($b,$a));
?>