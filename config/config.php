<?php
$host = 'localhost';
$db_name = 'job_placement_portal'; // Use your database name
$username = 'root'; // Default username
$password = ''; // Default password is empty

try {
    $db = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
