<?php
$host = 'localhost';
$dbname = 'catalogo_roupas';
$username = 'root';  // Substitua pelo seu usuário MySQL
$password = '';      // Substitua pela sua senha MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Conexão falhou: ' . $e->getMessage();
}
?>
