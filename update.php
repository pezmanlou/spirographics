<?php
require("connect.php");


$clientIp = $_SERVER['REMOTE_ADDR'];  // echos ip address of client

$fixed = $_POST[fixed];
$moving = $_POST[moving];
$offset = $_POST[offset];

$response = "";

$sql = "SELECT * FROM graphs WHERE fixed='$fixed' AND moving='$moving' AND offset='$offset' AND ip='$clientIp'";
$result = mysql_query($sql);
if(mysql_num_rows($result)==0)
{
	$like = 0;
	$dislike = 0;
	if($_POST['vote'] == 'up')
	{	
		$like = 1;
		$response= "Successfully liked. Fixed: ".$fixed." Moving: ".$moving." Offset: ".$offset;
	}
	else
	{
		$dislike = 1;
		$response = "Successfully disliked Fixed: ".$fixed." Moving: ".$moving." Offset: ".$offset;
	}

	$insert = "INSERT INTO graphs (fixed,moving,offset,likes,dislikes,ip) VALUES ( '$fixed', '$moving', '$offset','$like', '$dislike','$clientIp')";	

	$newChart = mysql_query($insert);
	

	$vote = $like-$dislike;
	$sql = "SELECT * FROM graphrank WHERE fixed='$fixed' AND moving='$moving' AND offset='$offset'";
	$result = mysql_query($sql);
	if(mysql_num_rows($result)==0)
	{

		$insert = "INSERT INTO graphrank (fixed,moving,offset,rank) VALUES ( '$fixed', '$moving', '$offset', '$vote')";
	$insertNew = mysql_query($insert);
	}
	else
	{
	$update ="UPDATE graphrank SET rank=rank + '$vote' WHERE fixed='$fixed' AND moving='$moving' AND offset='$offset'";
	$updateRank = mysql_query($update);
	}

}

else
{
	$response ="no";
}


mysql_close();


echo $response;

?>

