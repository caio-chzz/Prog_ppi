<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aka.css">
    <title>Document</title>
</head>
<body>
    
<div class="conti">
    <h1>tu estais logado, amem</h1>
    <form action="deslogar.php">
        <input type="submit" value="deslogar">
</div>




<?php
session_start();
echo $_SESSION['dado'];


?>



</body>
</html>