d<?php

// Use in the "Post-Receive URLs" section of your GitHub repo.

//if ( $_POST['payload'] ) {
  shell_exec( 'touch /log/hook-success' );
  $output = shell_exec( 'whoami' );
  //$output = shell_exec( 'pwd' );
  echo "$output";
//}

?>b
