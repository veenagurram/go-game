<html>

<body>
<?php
include"init.php";
session_start();
echo"<br>";
$email_id=$_POST['email'];  
$password=$_POST['password'];
$stmt="select user_id,password,salt from userdetails where email_id='$email_id'";
$result = $connectionn->query($stmt);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		$userid=$row["user_id"];
        $actualpassword=$row["password"];
		$salt=$row["salt"];
    }
} else {
    echo "0 results";
}
$iterations = 59999;
$hash = hash_pbkdf2("sha512",$password,$salt,$iterations,20);
$inputpassword= hash_hmac('sha512',$hash,$password);

if($actualpassword==$inputpassword){
	$_SESSION['current_user']=$email_id;
	$_SESSION['userid']=$userid;
	header("Location:homepage.php");
}
else{
	
	header("Location:index.html");

}

?>
</body>
</html>