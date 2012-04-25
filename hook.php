<?php

// Use in the "Post-Receive URLs" section of your GitHub repo.

if ( $_POST['payload'] ) {
  shell_exec( 'cd && touch penis' );
  shell_exec( 'cd /var/www/Spirographics/ && git reset --hard HEAD && git pull' );
}

?>hi
