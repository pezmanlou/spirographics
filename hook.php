<?php

// Use in the "Post-Receive URLs" section of your GitHub repo.

if ( $_POST['payload'] ) {
  shell_exec( 'touch /log/hook-success' );
  $output = shell_exec( 'cd /var/www/Spirographics/ && git reset --hard HEAD && git pull' );
  echo "$output";
}

?>hi
