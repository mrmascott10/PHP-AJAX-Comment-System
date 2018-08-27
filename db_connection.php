<?php
//Could wrap in function then call function instead of $mysqli-query($var).
$servername = "#";
$username = "#";
$password = "#";
$dbname = "#";
//create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
//Check Connection
if ($mysqli->connect_error) {
  die("Connection Failed " . $mysqli->connect_error);
}
?>
