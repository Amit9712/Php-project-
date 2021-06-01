<?php 
$a=array(10,20,21,23,17,10,20,21,23,10,15,20,21,20);
$s = array_sum ($a);
echo "<pre>";
print_r(array_count_values ($a));
echo "Total Of All Array Numbers = $s.";
?>