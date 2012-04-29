<?php 

//Get Post Variables. The name is the same as 
//what was in the object that was sent in the jQuery
$response = "test";

if (isset($_POST['sendValue'])){
    $rest = $_POST['sendValue']; 
    $response = file_get_contents($rest);
  
}else{
    $value = "";
}

echo $response;


?>

