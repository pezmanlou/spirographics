<?php 

//Get Post Variables. The name is the same as 
//what was in the object that was sent in the jQuery


if (isset($_POST['getLink'])){
    $rest = $_POST['getLink']; 
    $response = file_get_contents($rest);
    echo $response;
}else{
    $value = "";
}




?>

