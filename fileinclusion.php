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
$cmd = $_GET['command'];
passthru('SomeApp.exe '.$cmd);
?>
