<?php

// creating database variables
$hn = "localhost";
$un = "DB CONNECT";
$pw = "EAJjU1CFBzZMx/B]";
$db = "students";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>