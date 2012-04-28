<?php

// Use in the "Post-Receive URLs" section of your GitHub repo. poop

if ( $_POST['payload'] ) {
  shell_exec( 'touch /log/hook-success' );
  shell_exec( 'cd /var/www/Spirographics/ && git reset --hard HEAD && git pull' > );
}

?>hi
