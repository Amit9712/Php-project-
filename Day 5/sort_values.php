<!DOCTYPE html>
<html>
  <head>
    <title>Sort values</title>
  </head>
<body>
  <div>
    <center>
      <fieldset>
        <legend> Value Form </legend>
          <form method="post">
            <table>
              <tr>
                <td width="70px"> Sr. No. </td>
                <td width="150px"> Marks </td>
              </tr>  
              <tr>
                  <td> 1 </td>  
                  <td> <input type="Number" name="m1" required> </td>
              </tr>  
              <tr>
                  <td> 2 </td>   
                  <td> <input type="Number" name="m2" required> </td>
              </tr>  
              <tr>
                  <td> 3 </td>  
                  <td> <input type="Number" name="m3" required> </td>
              </tr>  
              <tr>
                  <td> 4 </td>  
                  <td> <input type="Number" name="m4" required> </td>
              </tr>  
              <tr>
                  <td> 5 </td>  
                  <td> <input type="Number" name="m5" required> </td>
              </tr> 
              <tr>
                <td></td>
                <td><input type="submit" /></td>
                <td><input type="reset" /></td>
              </tr> 
            </table>
          </form>
        </fieldset>
      </center>
    </div>
  </body>
</html> 

<?php

if($_POST)
{
	$m[0] = $_POST['m1'];
	$m[1] = $_POST['m2'];
	$m[2] = $_POST['m3'];
	$m[3] = $_POST['m4'];
	$m[4] = $_POST['m5'];
	$s = array_sum ($m);
	echo "<br/>Total Of All Numbers = $s.<br/>";
	asort($m);
	echo "<pre> Sorted ";
	print_r($m);
}
?>