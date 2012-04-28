-<?php

// Use in the "Post-Receive URLs" section of your GitHub repo. :4

//if ( $_POST['payload'] ) {
  shell_exec( 'touch /log/hook-success' );
  $output = shell_exec( 'git pull' );
  //$output = shell_exec( 'pwd' );
  echo "$output";
//}

?>-
