<?php

// this automatically pulls on the server whenever a commit is pushed to github

if ( $_POST['payload'] ) {
  $output = shell_exec( 'git pull' );
  echo "$output";
}

?>
