<?php
require("connect.php");



//echo $_POST["fixed"];

//mysql_query("INSERT into graphs (fixed, moving,offset) VALUES ( '$_POST[fixed]', '$_POST[moving]', '$_POST[offset]')";

$clientIp = $_SERVER['REMOTE_ADDR'];  // echos ip address of client

$fixed = $_POST[fixed];
$moving = $_POST[moving];
$offset = $_POST[offset];



$sql = "SELECT * FROM graphs WHERE fixed='$fixed' AND moving='$moving' AND offset='$offset'";
$result = mysql_query($sql);
if(mysql_num_rows($result)==0)
{
	$insert = "INSERT INTO graphs (fixed,moving,offset,likes,dislikes,ip) VALUES ( '$fixed', '$moving', '$offset',1,0,'$clientIp')"; 
	$newChart = mysql_query($insert);
}
else
{
	echo 'here';
	$update = "UPDATE graphs SET likes=likes+1 WHERE fixed='$fixed' AND moving='$moving' AND offset='$offset'";
	$updateChart= mysql_query($update);
	
}

	
/*
$result = mysql_query($sql);

while($row = mysql_fetch_array($result))
{
	print_r($row);	
	echo '<br/>';

}

*/


mysql_close();




?>


a;sldjflaksdjfasdl;ajf
