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
    if ($_POST["action"] == "fetch") {
        // Fetch and return the score
        $result = $conn->query("SELECT score FROM scores LIMIT 1");
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo $row["score"];
        } else {
            echo "No score available";
        }
    }
}

$conn->close();
?>
