<?php
ob_start();
require("index.php");
$result = ob_get_clean();

if( $result != 'Hello World guys' ) {
   exit(1);
}
exit(0);
