<?php
include('includes/db.php');
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   


    header('Location: index.php');
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $doceId = $_GET['id']; 

    
    $nomeDoce = $_POST['nome_doce'];
    $preco = $_POST['preco'];
    $sabor = $_POST['sabor'];

    $query = "UPDATE doces SET nome_doce = '$nomeDoce', preco = '$preco', sabor = '$sabor' WHERE id = $doceId";
    $result = mysqli_query($conexao, $query);

    if ($result) {
        
        header('Location: index.php');
        exit;
    } else {
        echo "Erro ao atualizar o doce: " . mysqli_error($conexao);
    }
}


mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/crie.css">
    <title>Editar Doce</title>
</head>
<body>
    

    <div class="container">
    <h1>Editar Doce</h1>
        <form method="POST">
            <label for="nome_doce">Nome do Doce:</label>
            <input type="text" id="nome_doce" name="nome_doce" value="<?php echo $doce['nome_doce']; ?>" required>

            <label for="preco">Preço:</label>
            <input type="text" id="preco" name="preco" value="<?php echo $doce['preco']; ?>" required>

            <label for="sabor">Sabor:</label>
            <input type="text" id="sabor" name="sabor" value="<?php echo $doce['sabor']; ?>" required>

            <button type="submit" id="btnEditar">Salvar Edição</button>
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
