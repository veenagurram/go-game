
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
	Go GAME
</title>	
</head>
<body>
<form action="#" method="post">
Message:<br/>
<input type="text" name="message"><br/>
<input type="submit" value="submit">
</form>
<?php
//if(isset($_POST["message"])){
echo"I have joined the game";

$host    = "127.0.0.1";
$port    = 25003;
$message="";

	$message = $_POST["message"];
echo "Message To server :".$message;
// create socket
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
// connect to server
$result = socket_connect($socket, $host, $port) or die("Could not connect to server\n");  
// send string to server
socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");
// get server response
$result = socket_read ($socket, 1024) or die("Could not read server response\n");
echo "Reply From Server  :".$result;
// close socket
//socket_close($socket);
//}

?>

<body>
</html>