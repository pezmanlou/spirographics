<?php
require("connect.php");



//echo $_POST["fixed"];

//mysql_query("INSERT into graphs (fixed, moving,offset) VALUES ( '$_POST[fixed]', '$_POST[moving]', '$_POST[offset]')";

//echo $_SERVER['REMOTE_ADDR'];  // echos ip address of client

$fixed = $_POST[fixed];
$moving = $_POST[moving];
$offset = $_POST[offset];

$sql = "SELECT * FROM graphs WHERE fixed='$fixed' AND moving='$moving' AND offset='$offset'";
$result = mysql_query($sql);
if(mysql_num_rows($result)==0)
{
	echo 'new';

}
else
{
	echo 'updated data';
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
