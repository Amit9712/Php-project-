<?php
$a = array(
	'Name' => "Pratik_Patel",
	'Usr_Name' => "pratik736",
	'Mobile' => 12457890,
	'Address' => "ten",
	'Task' => "Php_Functions",
);
echo "<pre> Before: A ";
print_r($a);
echo "<pre> After: A ";
print_r(array_change_key_case($a,CASE_UPPER));
?>