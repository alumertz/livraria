<?php

class Conexao{
	private $pdo;

    function __construct(){
        $this->pdo = new PDO('mysql:host=localhost;dbname=livraria','root','');
        if(!$this->pdo) die (mysqli_error($this->pdo));
    }    

    function insertCliente($nome, $cpf, $email, $senha, $end, $cep){
        $comando = $this->pdo->prepare("INSERT INTO cliente (nome, email, cpf, senha, endereco, cep) VALUES (?, ?, ?, ?, ?, ?)");
        $comando->execute([$nome,$email,$cpf, $senha, $end, $cep]);
    }

    function findUser($email, $senha){
        $comando = $this->pdo->prepare("SELECT * FROM cliente WHERE (email=? && senha=?)");
        $comando->execute([$email,$senha]);
        $result = $comando->fetch(PDO::FETCH_ASSOC);

        return $result;

    }     
}
