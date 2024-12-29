<?php
// Connect to the MySQL database
$mysqli = new mysqli("localhost", "root", "", "my_database");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve data from POST
$name = $_POST['name'];
$message = $_POST['message'];

// Insert the data into the 'messages' table
$sql = "INSERT INTO messages (name, message) VALUES ('$name', '$message')";

// Execute the query
if ($mysqli->query($sql) === TRUE) {
    echo "Message saved successfully.";
} else {
    echo "Error: " . $mysqli->error;
}

// Close the connection
$mysqli->close();
?>
