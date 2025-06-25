<?php
$host = 'localhost';
$db   = 'wppoets';
$user = 'root'; // Change to your MySQL username
$pass = 'MyNewPass123!';     // Change to your MySQL password
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?> 

<!-- CREATE TABLE sections (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type ENUM('learning', 'technology', 'communication') NOT NULL,
    title VARCHAR(255) NOT NULL,
    subtitle VARCHAR(255),
    description TEXT,
    image VARCHAR(255),
    badge VARCHAR(255),
    link VARCHAR(255)
); -->