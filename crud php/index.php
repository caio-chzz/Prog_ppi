<?php
include('includes/db.php');

session_start();

// Verifique se o usuário está autenticado.
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}


$query = "SELECT id, nome_doce, preco, sabor FROM doces";
$result = mysqli_query($conexao, $query);


if (!$result) {
    die("Erro na consulta: " . mysqli_error($conexao));
}


$doces = mysqli_fetch_all($result, MYSQLI_ASSOC);


mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/dash.css">
    <title>Página Principal</title>

</head>
<body>
    <h1>Bem-vindo à Página Principal</h1>

    
    <div>
        <label for="pesquisar">Pesquisar:</label>
        <input type="text" id="pesquisar" name="pesquisar">
        <button type="button" id="btnPesquisar" onclick="pesquisarDoces()">Pesquisar</button>
        <button type="button" id="btnCadastrar">Cadastrar</button>
    </div>

    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Doce</th>
                <th>Preço</th>
                <th>Sabor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($doces as $doce): ?>
                <tr>
                    <td><?php echo $doce['id']; ?></td>
                    <td><?php echo $doce['nome_doce']; ?></td>
                    <td><?php echo $doce['preco']; ?></td>
                    <td><?php echo $doce['sabor']; ?></td>
                    <td>
                        <button type="button" onclick="excluirDoce(<?php echo $doce['id']; ?>)">Excluir</button>
                        <button type="button" onclick="editarDoce(<?php echo $doce['id']; ?>)">Editar</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <script>
    function pesquisarDoces() {
        
        var termoPesquisa = document.getElementById("pesquisar").value.toLowerCase();

        
        var linhasTabela = document.querySelectorAll("tbody tr");
        linhasTabela.forEach(function (linha) {
            var nomeDoce = linha.querySelector("td:nth-child(2)").textContent.toLowerCase(); 
            
            if (nomeDoce.includes(termoPesquisa)) {
                linha.style.display = "";
            } else {
                linha.style.display = "none";
            }
        });
    }
</script>
<script>
function excluirDoce(doceId) {
    
        window.location.href = 'excluir.php?id=' + doceId;
    
}

function editarDoce(doceId) {
    window.location.href = 'editar.php?id=' + doceId;
}
</script>
</body>
</html>