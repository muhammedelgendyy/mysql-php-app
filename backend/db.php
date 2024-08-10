<!-- backend/db.php -->
<?php
$mysqli = new mysqli('db', 'user', 'password', 'mydatabase');

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>

