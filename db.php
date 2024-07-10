<?php
$servername = "localhost";
$username = "u250946263_busbooking";
$password = "Busbooking@7478";
$dbname = "u250946263_bus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
