<?php

class Conexao{
	private $pdo;

    function __construct(){
        $this->pdo = new PDO('mysql:host=localhost;dbname=livraria','root','');
        if(!$this->pdo) die (mysqli_error($this->pdo));
    }    

    function insertCliente($nome, $cpf, $email, $senha, $end, $cep){

       

        echo "nome ".$nome." email ".$email." cpf ".$cpf." senha ".$senha." end ".$end." cep ".$cep;
        $comando = $this->pdo->prepare("INSERT INTO cliente (nome, email, cpf, senha, endereco, cep) VALUES (?, ?, ?, ?, ?, ?)");
        $comando->execute([$nome,$email,$cpf, $senha, $end, $cep]);
    }

      
}
