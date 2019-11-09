<?php

// $conn = new \PDO('mysql:host=localhost;dbname=site', 'root', 'daniel');
$conn = new \PDO('mysql:host=' . DB_SERVER . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

// Codes bellow for just test
$stmt = $conn->query('select * from users');
$result = $stmt->fetchAll(\PDO::FETCH_CLASS);
