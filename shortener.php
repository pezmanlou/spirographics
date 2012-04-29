<?php



$rest = "http://fatlink.me/api.php?action=shorturl&format=simple&keyword=test&url=http://triallink.com";
$response = file_get_contents($rest);
echo $response;


?>
