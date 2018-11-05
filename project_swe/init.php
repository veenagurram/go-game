<?php 
$server_name="localhost";
$user_name="Satishchandra";
$password="chandra+24895";
$db_name="goDatabase";

//Creating conncetion
$connectionn=new mysqli($server_name,$user_name,$password,$db_name);

if($connectionn->connect_error){
die("Conection Error");
}
else{
echo"Connection Successful";
}
?>