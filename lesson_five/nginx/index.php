<?php
// Connecting to the PostgreSQL database
$host = 'webproject-db'; // Name of the database service in Docker Compose
$dbname = 'my_database';
$user = 'user';
$password = 'password';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Executing an SQL query for "my_table" table
    $stmt = $pdo->query('SELECT * FROM new_table');
    while ($row = $stmt->fetch()) {
        echo "ID: " . $row['id'] . ", Name: " . $row['name'] . ", Age: " . $row['age'] . ", Email: " . $row['email'] . ", Created At: " . $row['created_at'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>