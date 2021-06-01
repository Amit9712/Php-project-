<?php
$a = array("Name", "Usr_Name", "Mobile", "Address", "Task");
$b = array("Pratik_Patel", "pratik736", "12457890", "ten", "Php_Functions");
echo "<pre> A ";
print_r($a);
echo "<pre> B ";
print_r($b);
echo "<pre> Combined ";
print_r(array_combine($a, $b));
?>