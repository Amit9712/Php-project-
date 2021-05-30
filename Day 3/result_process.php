<?php
$s1 = $_POST['s1'];
$m1 = $_POST['m1'];
$s2 = $_POST['s2'];
$m2 = $_POST['m2'];
$s3 = $_POST['s3'];
$m3 = $_POST['m3'];
$s4 = $_POST['s4'];
$m4 = $_POST['m4'];
$s5 = $_POST['s5'];
$m5 = $_POST['m5'];

$s = array($s1,$s2,$s3,$s4,$s5);
$m = array($m1,$m2,$m3,$m4,$m5);
$total = $percentage = 0;

echo "<center> <h1> Result </h1> <table>";

for($i=0;$i<5;$i++){
	echo "<tr>";
	echo "<td bgcolor='skyblue' width='100px' align='center'>$s[$i] </td>";
	echo "<td bgcolor='lightblue' width='100px' align='center'>$m[$i] </td>";
	$total = $total + $m[$i];
	echo "</tr>";
}

$percentage = $total/7.5;


if ($percentage >= 80) {
	echo "	<tr><td bgcolor='#75FF33' width='100px' align='center'>Total Marks  </td> 
			<td bgcolor='#75FF33' width='100px' align='center'>$total </td>";
	echo "	<tr><td bgcolor='#75FF33' width='100px' align='center'>Percentage  </td> 
			<td bgcolor='#75FF33' width='100px' align='center'>$percentage </td>";
	echo "	<tr><td bgcolor='#75FF33' width='100px' align='center'>Grades  </td> 
			<td bgcolor='#75FF33' width='100px' align='center'>High Distinction </td>";
} elseif ($percentage >=60 && $percentage < 80) {
	echo "	<tr><td bgcolor='#DBFF33' width='100px' align='center'>Total Marks </td> 
			<td bgcolor='#DBFF33' width='100px' align='center'>$total</td>";
	echo "	<tr><td bgcolor='#DBFF33' width='100px' align='center'>Percentage  </td> 
			<td bgcolor='#DBFF33' width='100px' align='center'>$percentage </td>";
	echo "	<tr><td bgcolor='#DBFF33' width='100px' align='center'>Grades  </td> 
			<td bgcolor='#DBFF33' width='100px' align='center'>Distinction </td>";
}elseif ($percentage >=40 && $percentage < 60) {
	echo "	<tr><td bgcolor='#FFBD33' width='100px' align='center'>Total Marks </td> 
			<td bgcolor='#FFBD33' width='100px' align='center'>$total</td>";
	echo "	<tr><td bgcolor='#FFBD33' width='100px' align='center'>Percentage  </td> 
			<td bgcolor='#FFBD33' width='100px' align='center'>$percentage </td>";
	echo "	<tr><td bgcolor='#FFBD33' width='100px' align='center'>Grades  </td> 
			<td bgcolor='#FFBD33' width='100px' align='center'>Pass </td>";
}else {
	echo "	<tr><td bgcolor='#FF5733' width='100px' align='center'>Total Marks  </td> 
			<td bgcolor='#FF5733' width='100px' align='center'>$total</td>";
	echo "	<tr><td bgcolor='#FF5733' width='100px' align='center'>Percentage  </td> 
			<td bgcolor='#FF5733' width='100px' align='center'>$percentage </td>";
	echo "	<tr><td bgcolor='#FF5733' width='100px' align='center'>Grades  </td> 
			<td bgcolor='#FF5733' width='100px' align='center'>Fail </td>";
}
echo "</tr> </table> </center>";
?>