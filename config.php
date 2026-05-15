<?php
// ******** update your personal settings ******** 

$servername = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASS');
$dbname = getenv('DB_NAME');
$tablename = getenv('DB_TABLENAME');

// Connect MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);

// set up char set
if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}