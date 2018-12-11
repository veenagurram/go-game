<html>
<head>
<style>div {
	background-color: grey;
  	width:absolute;
	height:absolute;
	border: 2px solid green;	
	padding: 2px;
}
.column {
    flex: 10%;
    padding: 10px;
    height: absolute; /* Should be removed. Only for demonstration */
}
.column1 {
    flex: 10%;
    padding: 5px;
    height: 30px; /* Should be removed. Only for demonstration */
}
.row {
    display: flex;

}</style>
<title>Gogame</title>
</head>

<body>

<?php 
$player=$_POST['player'];
$temp=$player[0];
$x_cord=substr($temp,-2,1);
$y_cord=substr($temp,-1,1);
echo $x_cord."<br>";
echo $y_cord."<br>";
echo"<form method=\"post\" action=\"testgame.php\" >";
for($i=0;$i<10;$i++){
	echo"<div class=\"row\">";
	for($j=0;$j<10;$j++){	
		#echo"<th>";
		echo"<div class=\"column1\">";
		if($i==$x_cord && $j==$y_cord){
			#echo"<input type=\"text\" value=\"X\">";
			echo"X";
		}else{
			echo"<input type=\"radio\" name=\"player[]\" value=\"$i$j\" />";
		}
		echo"</div>";
		#echo"</th>";
	}
	echo"</div>";
}
echo"<br>";
echo"<input type=\"submit\" name=\"formSubmit\" value=\"Submit\" />";
echo"</form>";
?>

</body>
</html>