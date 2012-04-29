<?php 

//Get Post Variables. The name is the same as 
//what was in the object that was sent in the jQuery
if (isset($_POST['getLink'])){
    $value = $_POST['getLink'];   
}else{
    $value = "";
}
 echo $value;
?>
