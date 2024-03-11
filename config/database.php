<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'katrin');
define('DB_PASS', 'cubalibre8');
define('DB_NAME', 'php_feedback_form');

// create connection to the mySQL database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check the connection
if ($conn->connect_error) {
    die('Connection failed' . $conn->connect_error);
}
