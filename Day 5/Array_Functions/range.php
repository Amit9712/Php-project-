<?php
$a = range("11", "20");
echo "<pre>";
print_r($a);
echo "Select year : ";
$year = range(1900,2021);
echo "<select>";
foreach ($year as $value)
{
echo
"<option>$value</option>";
}
echo "</select>";
?>
