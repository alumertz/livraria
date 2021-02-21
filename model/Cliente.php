<?php

include 'Conexao.php';

class Cliente{

	private $id;

	private $nome;
	private $cpf;
	private $email;
	private $senha;

	private $endereco;
	private $cep;

	private $conect;

	
	
	function __construct(){
		$this->conect = new Conexao();	
	}

	function insert(){
		$this->conect->insertCliente($this->nome, $this->cpf, $this->email,
		 	 $this->senha, $this->endereco, $this->cep);
	}

	function processLogin($email, $senha){
		$result = $this->conect->findUser($email, $senha);
		
		if($result){
			$this->nome = $result['nome'];
			$this->cpf= $result['cpf'];
			$this->email = $result['email'];
			$this->senha = $result['senha'];
			$this->end = $result['endereco'];
			$this->cep = $result['cep'];
			$this->id = $result['id'];
			return true;	
		}
		else {
			return false;
		}
		
	}
	
	function getNome(){
		return $this->nome;
	}
	function getCpf(){
		return $this->cpf;
	}
	function getEmail(){
		return $this->email;
	}
	function getSenha(){
		return $this->senha;
	}
	function getEndereco(){
		return $this->endereco;
	}
	function getCep(){
		return $this->cep;
	}

	function getId(){
		return $this->id;
	}

	function setNome($nome){
		$this->nome = $nome;
	}
	function setCpf($cpf){
		$this->cpf= $cpf;
	}
	function setEmail($email){
		$this->email = $email;
	}
	function setSenha($senha){
		$this->senha = $senha;
	}
	function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	function setCep($cep){
		$this->cep = $cep;
	}
	

}