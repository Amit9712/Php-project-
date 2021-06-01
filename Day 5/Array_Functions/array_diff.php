<?php
$a=array(10,20,21,23,17,10,20);
$b=array(21,23,10,15,28,21,20);
echo "<pre> A ";
print_r($a);
echo "<pre> B ";
print_r($b);
echo "<pre>Diff In A ";
print_r(array_diff($a, $b));
echo "<pre>Diff In B ";
print_r(array_diff($b, $a));
?>