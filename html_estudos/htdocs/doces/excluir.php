<?php
include('includes/db.php');

if (isset($_GET['id'])) {
    $doceId = $_GET['id'];

   
    $query = "DELETE FROM doces WHERE id = $doceId";
    $result = mysqli_query($conexao, $query);

    if (!$result) {
        die("Erro ao excluir o doce: " . mysqli_error($conexao));
    }

    mysqli_close($conexao);

    header('Location: index.php');
    exit;
} else {
    die("ID do doce não fornecido");
}
?>
