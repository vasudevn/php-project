<?php
ob_start();
require("index.php");
$result = ob_get_clean();

if( $result != 'Hello World Guys !!!' ) {
   exit(1);
}
exit(0);
