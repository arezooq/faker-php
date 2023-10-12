<?php
$dsn = "mysql:host=127.0.0.1;dbname=posts-faker";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>