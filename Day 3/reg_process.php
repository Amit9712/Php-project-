<?php
$fullname = $_POST['fname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pass'];
$mobile = $_POST['mobile'];
$dob = $_POST['dob'];
$myg = $_POST['myg'];
$hobbies = $_POST['hobbies'];
$city = $_POST['city'];
$address = $_POST['address'];

echo "	Full Name    	= $fullname <br/>
		Username     	= $username <br/>
		Email 			= $email <br/>
		Password 		= $password <br/>
		Mobile Number 	= $mobile <br/> 
		D.O.B. 			= $dob <br/>
		Gender 			= $myg <br/> 
		Hobbies			= $hobbies <br/>
		City 			= $city <br/>
		Address 		= $address ";
?>