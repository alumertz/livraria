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

    function getLivros(){
        $comando = $this->pdo->prepare("SELECT * FROM livro");
        $comando->execute([$email,$senha]);
        $result = $comando->fetch(PDO::FETCH_ASSOC);
        print_r($result);
        return $result;
    }

    function getLivro($id){
        $comando = $this->pdo->prepare("SELECT * FROM livro WHERE id=?");
        $comando->execute([$id]);
        $result = $comando->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    function search($busca){
        $busca = '%'.str_replace ( ' ' , ' % ', $busca).'%';

        $comando = $this->pdo->prepare("SELECT * FROM livro WHERE (titulo like ? or autor like ?)");
        $comando->execute([$busca,$busca]);
        //echo($comando->debugDumpParams());
        $result = $comando->fetchAll(PDO::FETCH_ASSOC);
                
        return $result;
    }
}
