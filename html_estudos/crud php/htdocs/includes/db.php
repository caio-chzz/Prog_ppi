<?php
$hostname = 'localhost';
$username = 'root';
$password = 'aluno';
$database = 'docinhos';

// Conexão com o banco de dados
$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Bom dia!";
?>
