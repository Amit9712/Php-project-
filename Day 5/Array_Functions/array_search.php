<?php
$a = array(
	'Name' => "Pratik_Patel",
	'Usr_Name' => "pratik736",
	'Mobile' => 12457890,
	'Address' => "ten",
	'Task' => "Php_Functions",
);
$s = array_search('pratik736', $a);
echo "<pre> ";
print_r($a);
echo "<br/> Search Found At Index : $s.";
?>