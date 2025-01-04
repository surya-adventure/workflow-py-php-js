<?php
require_once 'DataRenderer.php';

// Database configuration
$host = 'localhost';
$dbname = 'php_python_api';
$username = 'root';
$password = '';

// Create an instance of DataRenderer
$dataRenderer = new DataRenderer($host, $dbname, $username, $password);

// Render the table
echo "<h1>Data Visualization</h1>";
$dataRenderer->renderTable('incubator_heracell');


?>
