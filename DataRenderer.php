<?php

class DataRenderer {
    private $pdo;

    public function __construct($host, $dbname, $username, $password, $charset = 'utf8mb4') {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function renderTable($tableName) {
        try {
            $stmt = $this->pdo->query("SELECT * FROM $tableName ORDER BY created_at DESC");
            $data = $stmt->fetchAll();

            if (empty($data)) {
                echo "<p>No data available in the table.</p>";
                return;
            }

            echo "<table border='1' cellpadding='8' cellspacing='0'>";
            echo "<thead>";
            echo "<tr>";

            // Render table headers dynamically
            foreach (array_keys($data[0]) as $column) {
                echo "<th>" . htmlspecialchars($column) . "</th>";
            }

            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            // Render table rows
            foreach ($data as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                }
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        } catch (PDOException $e) {
            echo "<p>Error fetching data: " . $e->getMessage() . "</p>";
        }
    }
}




?>
