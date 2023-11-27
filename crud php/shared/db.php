<?php
$hostname = 'localhost';
$username = 'Aluno';
$password = 'Aluno';
$database = 'docinhos';

// Conexão com o banco de dados
$conn = new mysqli($hostname, $username, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>
