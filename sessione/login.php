<?php

if(isset($_GET['login']) && isset($_GET['senha'])) {

    $login = $_GET['login'];
    $senha = $_GET['senha'];

    if($login == 'admin' && $senha == '1234') {
       
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['dado'] = $_GET['dado'];
        header('Location: logado.php');
                                                                                                                                                                                                                                
    } else {
        echo 'login ou senha incorretos';
    }

} else {
    echo 'login ou senha não informados';
}



?>