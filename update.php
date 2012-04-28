<?php
require("connect.php");


//$link // name of db connection

//echo $_POST["fixed"];

//mysql_query("INSERT into graphs (fixed, moving,offset) VALUES ( '$_POST[fixed]', '$_POST[moving]', '$_POST[offset]')";

//echo $_SERVER['REMOTE_ADDR'];  // echos ip address of client



$sql = "SELECT * FROM graphs WHERE 1";


$result = mysql_query($sql);

$num=mysql_numrows($result);

echo $num



mysql_free_result($result);


?>


a;sldjflaksdjfasdl;ajf
