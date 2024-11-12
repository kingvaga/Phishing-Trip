<?php
// Database credentials
 // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*  */
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $name = $conn->real_escape_string($_POST['UserName']);
    $password = $conn->real_escape_string($_POST['Password']);

    // Insert data into the logs table
    $sql = "INSERT INTO logs (Name, Password) VALUES ('$name', '$password')";

    
}

// Close connection
$conn->close();
?>
