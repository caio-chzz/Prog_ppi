<?php
include('includes/db.php');
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    $nomeDoce = $_POST['nome_doce'];
    $preco = $_POST['preco'];
    $sabor = $_POST['sabor'];

    
    $query = "INSERT INTO doces (nome_doce, preco, sabor) VALUES ('$nomeDoce', '$preco', '$sabor')";
    $result = mysqli_query($conexao, $query);

    if ($result) {
       
        header('Location: index.php');
        exit;
    } else {
        echo "Erro ao cadastrar o doce: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/crie.css">
    
</head>
<body>
    <h1>Cadastrar Novo Doce</h1>

    <div class="container">
    <title>Cadastrar Doce</title>
        <form method="POST">
            <label for="nome_doce">Nome do Doce:</label>
            <input type="text" id="nome_doce" name="nome_doce" required>

            <label for="preco">Preço:</label>
            <input type="text" id="preco" name="preco" required>

            <label for="sabor">Sabor:</label>
            <input type="text" id="sabor" name="sabor" required>

            <button type="submit" id="btnCadastrar">Cadastrar</button>
            <button type="button" id="btnCancelar" onclick="cancelarEdicao()">Cancelar</button>
        </form>
    </div>
    <script>
        function cancelarEdicao() {
            window.location.href = 'index.php';
        }
    </script>
</body>
</html>
