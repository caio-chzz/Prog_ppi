<?php

include_once 'Database.php';
$conn = new Database();
if($conn = $conn->getConnection()){
    echo "Conectado com sucesso";
} else {
    echo "Erro ao conectar";
}

?>