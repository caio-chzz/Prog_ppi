<?php
include('../includes/db.php');

if (isset($_GET['id'])) {
    $doceId = $_GET['id'];

   
    $query = "DELETE FROM doces WHERE id = $doceId";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Erro ao excluir o doce: " . mysqli_error($conn));
    }

    mysqli_close($conn);

    header('Location: ../index.php');
    exit;
} else {
    die("ID do doce não fornecido");
}
?>
