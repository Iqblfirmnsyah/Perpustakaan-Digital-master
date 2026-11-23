<?php

/**
 * koneksi database (PDO).
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bukuhub";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log("Connection failed: " . $e->getMessage());
    throw new RuntimeException("Koneksi database gagal. Periksa config/database.php.");
}

return $conn;
