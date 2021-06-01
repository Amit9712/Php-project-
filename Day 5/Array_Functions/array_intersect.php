<?php
$a=array(10,20,21,23,17);
$b=array(21,23,10,15,28,21,20);
echo "<pre> A ";
print_r($a);
echo "<pre> B ";
print_r($b);
echo "<pre> Intersected ";
print_r(array_intersect($a,$b));
?>