<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

define('DBHOST', '127.0.0.1:3306');
define('DBUSER', 'root');
define('DBPASS', '+6.aAF7m0lR1');
define('DBNAME', 'oasis');
?>
<?php
$mysqli = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  die();
}

?>