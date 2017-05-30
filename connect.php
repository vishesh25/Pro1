<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Could not connect: ' . mysql_error());
mysql_select_db("project");

?>
