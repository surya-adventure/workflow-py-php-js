<?php
// Database Configuration
$host = 'localhost';  // MySQL server (localhost for local development)
$dbname = 'php_python_api';  // Your database name
$username = 'root';  // MySQL username (default: root)
$password = '';  // MySQL password (default: empty for localhost)
$charset = 'utf8mb4';  // UTF-8 character set for compatibility

// DSN (Data Source Name) string
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

// Options to handle errors and default fetch mode
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    // Create a PDO instance and establish the connection
    $pdo = new PDO($dsn, $username, $password, $options);
    // Uncomment the following line for successful connection debugging
    // echo "Connected successfully to the database!";
} catch (PDOException $e) {
    // Handle connection error
    die("Connection failed: " . $e->getMessage());
}
?>
