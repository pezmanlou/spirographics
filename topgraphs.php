<?php
require("connect.php");

$result = mysql_query("SELECT * FROM graphrank ORDER BY rank DEC LIMIT 0,10");

while($row = mysql_fetch_array($result))
{
	echo $row['rank'].'<br />';


}

?>
