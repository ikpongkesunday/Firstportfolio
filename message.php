<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is hosted elsewhere

$database = "okay"; // Replace with your database name

// Create connection
$conn = new mysqli("localhost","root","","okay");




// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // SQL query to insert data into the database
    $sql = "INSERT INTO message (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    
    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

