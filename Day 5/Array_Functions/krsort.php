<?php 
$a = array(
	'Name' => "Pratik_Patel",
	'Usr_Name' => "pratik736",
	'Mobile' => 12457890,
	'Address' => "ten",
	'Task' => "Php_Functions",
);
echo "<pre> Orinal ";
print_r($a);
krsort($a);
echo "<pre> Sorted ";
print_r($a);
?>