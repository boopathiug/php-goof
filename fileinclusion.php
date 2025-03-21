<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "testdb");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get POST data (vulnerable to SQL injection)
$name = $_POST['name'];
$email = $_POST['email'];

// SQL query (vulnerable)
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
