<?php
//  1.	create a form and send email and password, in the action page you will determine if the data is sent by get or post
$email= $_POST["email"];
$password= $_POST["password"];
echo $email."<br>".$password;
?>