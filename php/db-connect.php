<?php
$server = "localhost";
$user = "team08";
$pass = "password";
$db = "team08-20cob290";

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
