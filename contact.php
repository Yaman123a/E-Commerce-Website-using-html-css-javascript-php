<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$contactNumber = $_POST['contact_number'];
$message = $_POST['message'];

// Connect to MySQL database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli('demo', $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert form data into MySQL database
$sql = "INSERT INTO contact_messages (name, email, contact_number, message) VALUES ('$name', '$email', '$contactNumber', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
