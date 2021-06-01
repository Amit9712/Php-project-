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
shuffle($a);
echo "<pre> shuffled ";
print_r($a);
?>