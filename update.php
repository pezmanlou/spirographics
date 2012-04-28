<?php
require("connect.php");



//echo $_POST["fixed"];

//mysql_query("INSERT into graphs (fixed, moving,offset) VALUES ( '$_POST[fixed]', '$_POST[moving]', '$_POST[offset]')";

//echo $_SERVER['REMOTE_ADDR'];  // echos ip address of client



$sql = "SELECT * FROM graphs";


$result = mysql_query($sql);

echo mysql_result($result,1);

$num=mysql_numrows($result);

mysql_close();




?>


a;sldjflaksdjfasdl;ajf
