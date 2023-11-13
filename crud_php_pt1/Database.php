<?php

class Database{
    PRIVATE $host = "localhost";
    PRIVATE $USER = "root";
    PRIVATE $password = "aluno";
    PRIVATE $banco = "pessoa";
    PRIVATE $conexao = null;

    public function getConnection(){
        try{
            $this->conexao = new PDO("mysql:host=".$this->host.";dbname=".$this->banco, $this->USER, $this->password);
            $this->conexao->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Erro de conexao: ".$exception->getMessage();
        }
        return $this->conexao;
    }

   













}

?>