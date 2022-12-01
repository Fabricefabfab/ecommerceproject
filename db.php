<?php

require "config/constants.php";

$servername = "us-cdbr-east-06.cleardb.net";
$username = "b418eaaffbbae2";
$password = "261f9bfb";
$db = "heroku_8ad4d708550d9cd";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
