<?php
$link = mysql_connect('localhost', 'ubuntu', 'password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
echo '<br />';



?>