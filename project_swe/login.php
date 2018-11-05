<html>
<body>
<?php
include"init.php";
echo"<br>";
$email_id=$_POST['email'];  
$password=$_POST['password'];
$stmt="select password,salt from userdetails where email_id='$email_id'";
$result = $connectionn->query($stmt);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
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
	header("Location:homepage.html");
}
else{
	header("Location:index.html");
}

?>
</body>
</html>