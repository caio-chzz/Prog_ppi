<?php

function potenciacao($base, $expoente){
    $resultado = 1;
    for($i = 0; $i < $expoente; $i++){
        $resultado = $resultado * $base;
    }
    return $resultado;
}
   
function delta ($a, $b, $c){
    $delta = potenciacao($b, 2) - (4 * $a * $c);
    return $delta;
}

function baskhara($a, $b, $c){
    $delta = delta($a, $b, $c);
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    $resultado = array($x1, $x2);
    return $resultado;
}

if(isset($_GET['a']) && isset($_GET['b'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $resultado = baskhara($a, $b, $c);
    echo "O resultado de x1 é: " . $resultado[0] . "<br>";
    echo "O resultado de x2 é: " . $resultado[1] . "<br>";
} 
























?>