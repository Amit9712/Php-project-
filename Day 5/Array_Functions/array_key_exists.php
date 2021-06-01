<?php
$a = array(
	'Name' => "Pratik_Patel",
	'Usr_Name' => "pratik736",
	'Mobile' => 12457890,
	'Address' => "ten",
	'Task' => "Php_Functions",
);
$k = array_key_exists('Mobile', $a);
echo "<pre> ";
print_r($a);
echo "If Entred Value is Avaliable Then It Gives Out-put '1' Else ' '. <br/>Here Out-put is = $k.";
?>