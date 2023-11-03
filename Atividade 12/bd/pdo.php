<?php
    $host = 'localhost';
    $dbname = 'leonardo';
    $user = 'postgres';
    $password = '123';

    try {
        $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>