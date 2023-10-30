<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>page</h1>

<?php

$var1 = " mundeal";

echo "hello world" . $var1 ;
echo "<br>";
echo gettype($var1);

$var1 = 10;
echo "<br>";
echo gettype($var1);

$var1 = 10.10;
echo "<br>";
echo gettype($var1);
?>

<h1>pagedois</h1>

<?php

class Pessoa {
    public $nome;
    public function altera($n){
        $this->nome = $n;
    }
    public function fala(){
        echo "meu nome é " . $this->nome;
    }

    public function tamanhoNome(){
        return strlen($this->nome);
        
    }
}

$p1 = new Pessoa();
$p1 -> altera("muricio");
$p1 -> fala();

$p2 = new Pessoa();
$p2 -> altera("afredon");
$p2 -> fala();
echo "<br>";
echo $p2 -> tamanhoNome();
?>

<h1>pagetres</h1>

<?php

class Cachorro {

    public $nome;
    public $idade;

    public function fala(){
        echo "meu nome é " . $this->nome . " e tenho " . $this->idade . " anos";
    }

    public function __construct(  $n, $i){
        $this->nome = $n;
        $this->idade = $i;
    }

   }

  /* $p1 = new Cachorro("muricio", 20);
   

   $p2 = new Cachorro("alfredo", 30);


   $p3 = new Cachorro("jose", 40);

   $cachorros=array($p1, $p2, $p3);
   foreach($cahorros as $ps){
       $ps->fala();
       echo "<br>";
*/
?>

<h1>fff</h1>

</body>
</html>