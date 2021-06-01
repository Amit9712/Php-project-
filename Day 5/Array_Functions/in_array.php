<?php 
$a=array(10,20,21,23,17,10,20,21,23,10,15,20,21,20);
$n = in_array(10,$a);
echo "<pre>";
print_r(array_count_values ($a));
echo "<pre>";
echo "If Entred Value is Avaliable Then It Gives Out-put '1' Else ' '. <br/> Here Out-put is = $n.";
?>