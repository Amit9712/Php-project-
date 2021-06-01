<?php
$a = array(
	'Name' => "Pratik_Patel",
	'Usr_Name' => "pratik736",
	'Mobile' => 12457890,
	'Address' => "ten",
	'Task' => "Php_Functions",
);
echo "<pre> A ";
print_r($a);
echo "<br/>Values:";
$v = array_values($a);
foreach($v as $key => $value) {
echo " <br />$key - $value";
}
?>