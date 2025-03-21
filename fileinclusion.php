<?php
$incfile = $_REQUEST['file'];
include($incfile.'.php');
?>

<?php
$offset = $argv[0]; // beware, no input validation!
$query  = "SELECT id, name FROM products ORDER BY name LIMIT 20 OFFSET $offset;";
$result = pg_query($conn, $query);
?>

<?
$username = $_GET['username'];
$result=mysql_query('SELECT * FROM users WHERE username="'.$username.'"');
?>
