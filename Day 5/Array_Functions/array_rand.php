<?php
$a = array(
	'Name' => "Pratik_Patel",
	'Usr_Name' => "pratik736",
	'Mobile' => 12457890,
	'Address' => "ten",
	'Task' => "Php_Functions",
);
$r = array_rand($a, 2);
echo "<pre> ";
print_r($a);
echo "<pre> Random ";
print_r($r);
?>