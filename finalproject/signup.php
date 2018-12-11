<html>
<body>
<?php 
include"init.php";
echo"<br>";
$first_name=$_POST['firstname'];   //write validation for sql injection, mysqli_real_escape_string
$last_name=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password1'];     
$re_password=$_POST['password2'];

if($password == $re_password) {
	$flag = TRUE;
}

if($flag == TRUE)
{
$iterations = 59999;
$salt= bin2hex(openssl_random_pseudo_bytes(16));
$hash = hash_pbkdf2("sha512",$password,$salt,$iterations,20);
$salted_hash = hash_hmac('sha512',$hash,$password);
//$hashpassword = hash('sha512', $password);
$stmt="insert into userdetails(first_name,last_name,email_id,password,salt) values('$first_name','$last_name','$email','$salted_hash','$salt')";

if($connectionn->query($stmt)===TRUE){
	
		header("Location:index.html");
}
else
{
	echo"Hello";
}	
}

?>



</body>
</html>