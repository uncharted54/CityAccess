<?php

// URL of the host
$dbhost = "localhost";

// Name of the database
$dbname = "pii";

// User name
$dbuser = "root";

// Password
$dbpass = "root";

mysql_connect($dbhost, $dbuser, $dbpass) or die("Erreur 1 MySQL : ".mysql_error());
mysql_select_db($dbname) or die("Erreur 2 MySQL : " . mysql_error());
?>