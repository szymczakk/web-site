<?php

if ( $_POST['payload'] ) {
  shell_exec( 'cd /home/rakaz/domains/rakaz.pl/public_html/ && git reset --hard HEAD && git pull' );
}
?>
