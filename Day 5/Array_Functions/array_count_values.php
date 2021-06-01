<?php 
$a=array(10,20,21,23,17,10,20,21,23,10,15,20,21,20);
echo "<pre> Orinal ";
print_r($a);
echo "<pre> Counted ";
print_r(array_count_values ($a));
?>