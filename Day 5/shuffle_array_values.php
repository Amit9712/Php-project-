<?php
$m[0] = 343;
$m[1] = 2345;
$m[2] = 545;
$m[3] = 676;
$m[4] = 2143;
shuffle($m);
echo "<pre> shuffled ";
print_r($m);
?>
<button onClick="window.location.reload();">shuffle</button>