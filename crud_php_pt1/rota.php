<?php

if(isset($_POST['op'])){
    header ('Location: index.php');
    exit();
}

$op = $_POST['op'];

switch ($op) {
    case 'cadastrar usuario':
        if (isset ($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
            $resultado = mysqli_query($conexao, $sql);
            if($resultado){
                echo "Usuario cadastrado com sucesso!";
            }else{
                echo "Erro ao cadastrar usuario!";
            }
        }
        break;

}
    









































?>