<?php



function adicao ($a, $b) {
    return $a + $b ;
}

function subtracao ($a, $b) {
    return $a - $b ;
}

function multiplicacao ($a, $b) {
    return $a * $b ;
}

function divisao ($a, $b) {
    return $a / $b ;
}


if(!(isset($_GET['a']) && isset($_GET['b']))) {
    header("Location: localhost:http://localhost/erro.php");
    exit;
}
    
if(isset($_GET['operacao']) && $_GET['operacao'] == soma){
    echo adicao($_GET['a'], $_GET['b']);
}

if(isset($_GET['operacao']) && $_GET['operacao'] == subtração){
    echo subtracao($_GET['a'], $_GET['b']);
}

if(isset($_GET['operacao']) && $_GET['operacao'] == multiplicação){
    echo multiplicacao($_GET['a'], $_GET['b']);
}

if(isset($_GET['operacao']) && $_GET['operacao'] == divisão){
    echo divisao($_GET['a'], $_GET['b']);
}

?>


