<!DOCTYPE html>
<html>
  <title>php form demo</title>
<head>
<style>
.myDiv {
  border: 5px outset darkgrey;
  background-color: lightgery;    
  text-align: center;
}

td {
  width: 250px;
}

.error {
  color: #FF0000;
}
</style>
</head>
<body>

<p><span class="error">* required field</span></p>
<center>

<?php

$nameErr = $emailErr = $genderErr = $mobileErr = $dobErr = $hobbiesErr = $cityErr = "";
$name = $email = $gender = $address = $mobile =  $dob =  $hobbies =  $city = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

   if (empty($_POST["mobile"])) {
    $mobileErr = "Mobile Number is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
  }

    if (empty($_POST["dob"])) {
    $dobErr = "Date of Birth is required";
  } else {
    $dob = test_input($_POST["dob"]);
  }

    if (empty($_POST["hobbies"])) {
    $hobbiesErr = "Hobbies is required";
  } else {
    $hobbies = test_input($_POST["hobbies"]);
  }

    if (empty($_POST["city"])) {
    $cityErr = "City is required";
  } else {
    $city = test_input($_POST["city"]);
  }

  if (empty($_POST["address"])) {
    
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<div class="myDiv">
  <table border="0px">

<tr>
  <td> <b> Full Name </b> </td>
  <td> <input type="text" name="name" value="<?php echo $name;?>"> 
    <span class="error">* <?php echo $nameErr;?></span> </td>
</tr>

<tr>
  <td> <b> Email </b> </td>
  <td> <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span> </td>
</tr>

<tr>
  <td> <b> Mobile Number </b> </td>
  <td> <input type="Number" name="mobile" value="<?php echo $mobile;?>">
    <span class="error">* <?php echo $mobileErr;?></span> </td>
</tr> 

<tr>
  <td> <b> D.O.B. </b> </td>
  <td> <input type="date" name="dob" value="<?php echo $dob;?>">
    <span class="error">* <?php echo $dobErr;?></span> </td>
</tr>

<tr>
  <td> <b> Gender </b> </td>
  <td>  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span> </td>
</tr> 

<tr>
  <td> <b> Hobbies </b> </td>
  <td> <input type="text" name="hobbies" value="<?php echo $hobbies;?>">
    <span class="error">* <?php echo $hobbiesErr;?></span> </td>
</tr>

<tr>
  <td> <b> city </b> </td>
  <td> <input type="text" name="city" value="<?php echo $city;?>">
    <span class="error">* <?php echo $cityErr;?></span>  </td>
</tr>

<tr>
  <td> <b> Address </b> </td>
  <td> <textarea name="address" rows="5" cols="40" value="<?php echo $address;?>"></textarea> </td>
</tr>

<tr>
  <td> </td>
  <td> <input type="submit" name="submit" value="Submit"> </td>
</tr>

</table>
</div>
</form>
</center>
<br><br>

<h2>Your Input:</h2>
<br>
<div class="myDiv">

<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $hobbies;
echo "<br>";
echo $mobile;
echo "<br>";
echo $dob;
echo "<br>";
echo $address;
echo "<br>";
echo $city;
?>

</div>
</body>
</html>