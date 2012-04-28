<?php
require("connect.php");


//$link // name of db connection

//echo $_POST["fixed"];

//mysql_query("INSERT into graphs (fixed, moving,offset) VALUES ( '$_POST[fixed]', '$_POST[moving]', '$_POST[offset]')";

//echo $_SERVER['REMOTE_ADDR'];  // echos ip address of client

$dbname = "spiro";

$sql = "SELECT * FROM \'graphs\'";
$result = mysql_query($sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

echo $result;
mysql_free_result($result);


?>
