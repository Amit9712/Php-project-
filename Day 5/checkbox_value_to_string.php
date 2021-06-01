<?php 
	$arr = array("ahmed", "drinks", "orange juice", "every", " morning", 
			"fatema & layla", "drink", "tea", "after", "lunch",
			"he", "plays", "football", "in", "the park",
			"the boys", "play", "chess", "at", "weekends",
			"shanaz", "has", "breakfast", "at", "seven o-clock",
			"my parents", "have", "a", "new", "car",
			"they", "do", "the", "shopping", "at weekends",
			"ann",  "does", "the", "cooking", "every", "day"); 
?>
<form method="post">
Words :
<?php
	foreach ($arr as $value)
		{
			echo "$value<input type='checkbox' name='cbox[]'' value='$value'>&nbsp;&nbsp;&nbsp;";
		}
?>
<input type="submit">
</form>
<?php
if($_POST)
{
$tik = $_POST['cbox'];
$string = implode(" ", $tik);
echo $string;
}
?>