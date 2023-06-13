<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "live_score_sample";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["action"] == "increment") {
        // Increment the score
        $conn->query("UPDATE scores SET score = score + 1");
    }
}

$conn->close();
?>
