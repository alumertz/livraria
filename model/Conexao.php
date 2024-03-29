<?php

class Conexao{
	private $pdo;

    function __construct(){
        $this->pdo = new PDO('mysql:host=localhost;dbname=livraria','root','');
        if(!$this->pdo) die (mysqli_error($this->pdo));
    }    

    function insertCliente($nome, $cpf, $email, $senha, $end, $cep){
        $comando = $this->pdo->prepare("INSERT INTO cliente (nome, email, cpf, senha, endereco, cep) VALUES (?, ?, ?, ?, ?, ?)");
        $comando->execute([$nome,$email,$cpf, password_hash($senha, PASSWORD_DEFAULT), $end, $cep]);
    }

    function findUser($email, $senha){
        $comando = $this->pdo->prepare("SELECT * FROM cliente WHERE (email=?)");
        $comando->execute([$email]);
        $result = $comando->fetch(PDO::FETCH_ASSOC);

        if (password_verify ($senha, $result['senha'] )){
            return $result;
         }
        else{
            return false;
        }
    }

    function getLivros(){
        $comando = $this->pdo->prepare("SELECT * FROM livro");
        $comando->execute();
        $result = $comando->fetchAll(PDO::FETCH_ASSOC);
        
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

    function getByCategoria($cat){
        $comando = $this->pdo->prepare("SELECT * FROM livro WHERE categoria = ?");
        $comando->execute([$cat]);
        $result = $comando->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }

    function getDestaques(){
        $comando = $this->pdo->prepare("SELECT * FROM livro WHERE destaque = 1");
        $comando->execute();
        $result = $comando->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }
}
