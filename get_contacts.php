<?php
// Establish database connection
$servername = "localhost";
$username = "uzr";
$password = "uzr";
$dbname = "bonntech";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute SQL query to retrieve all contacts from the database
$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);

$contacts = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $contacts[] = $row;
    }
}

// Return the contacts as JSON
header('Content-Type: application/json');
echo json_encode($contacts);

// Close database connection
$conn->close();
?>
