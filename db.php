<?php
$host = 'localhost';
$dbname = 'ista';
$username = 'root'; // votre nom d'utilisateur
$password = ''; // votre mot de passe

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
