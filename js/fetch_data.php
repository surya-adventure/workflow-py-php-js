<?php
// Database Configuration
$host = 'localhost';
$dbname = 'php_python_api';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    
    // Fetch data query
    $stmt = $pdo->query("SELECT * FROM incubator_heracell ORDER BY created_at DESC");
    $data = $stmt->fetchAll();

    // Return data as JSON
    header('Content-Type: application/json');

    
    echo json_encode($data);

} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
