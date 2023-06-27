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
try {
// Get contact data from POST request
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$mobileNumber = $_POST["mobileNumber"];
$email = $_POST["email"];
$postcode = $_POST["postcode"];

// Prepare and execute SQL query to insert contact into the database
$stmt = $conn->prepare("INSERT INTO contacts (first_name, last_name, mobile, email, postcode) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $firstName, $lastName, $mobileNumber, $email, $postcode);

if ($stmt->execute()) {
    echo "Contact saved successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close database connection
$stmt->close();
$conn->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
