<?php
$incfile = $_REQUEST['file'];
include($incfile.'.php');
?>

<?php
$offset = $argv[0]; // beware, no input validation!
$query  = "SELECT id, name FROM products ORDER BY name LIMIT 20 OFFSET $offset;";
$result = pg_query($conn, $query);
?>

<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "testdb");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user input (vulnerable to SQL injection)
$username = $_GET['username'];
$password = $_GET['password'];

// SQL query (vulnerable to SQL injection)
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

// Execute query
$result = mysqli_query($conn, $sql);

// Check if user exists
if (mysqli_num_rows($result) > 0) {
    echo "Login successful!";
} else {
    echo "Invalid username or password.";
}

// Close connection
mysqli_close($conn);
?>
