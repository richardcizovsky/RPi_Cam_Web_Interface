<?php
   define('BASE_DIR', dirname(__FILE__));
   require_once(BASE_DIR.'/config.php');
   $pipe = fopen("FIFO","w");
   fwrite($pipe, "im,1" . "\n");
   fclose($pipe);
   usleep(1000000);
   header("Content-Type: image/jpeg");
   readfile("/var/www/html/media/im.jpg");
?>
