<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "nursery_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
  echo "Connection To Database Failed!";
}

?>