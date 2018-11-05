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
echo"This is new game";
$message="";

	$message = $_POST["message"];
$host = "127.0.0.1";
$port = 25003;
// don't timeout!
#set_time_limit(0);
// create socket
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
// bind socket to port
$result = socket_bind($socket, $host, $port) or die("Could not bind to socket\n");
// start listening for connections
$result = socket_listen($socket, 3) or die("Could not set up socket listener\n");

// accept incoming connections
// spawn another socket to handle communication
$spawn = socket_accept($socket) or die("Could not accept incoming connection\n");
// read client input
$input = socket_read($spawn, 1024) or die("Could not read input\n");
// clean up input string
$input = trim($input);
echo "Client Message : ".$input;
// reverse client input and send back
$output = strrev($input) . "\n";
socket_write($spawn, $message, strlen ($message)) or die("Could not write output\n");
// close sockets
//socket_close($spawn);
//socket_close($socket);

//}
?>

<body>
</html>