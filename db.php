<?php

require "config/constants.php";

$servername = "us-cdbr-east-06.cleardb.net";
$username = "be2703aa38ff97";
$password = "42423569";
$db = "heroku_1553afc4b8a3a75";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
