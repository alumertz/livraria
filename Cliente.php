<?php

// function __autoload($class_name) {
// 	require_once $class_name . '.php';
// }

include 'Conexao.php';

class Cliente{
	private $nome;
	private $cpf;
	private $email;
	private $senha;

	private $end;
	private $cep;

	
	
	function __construct($nome, $cpf, $email, $senha, $end, $cep){
		$this->nome = $nome;
		$this->cpf= $cpf;
		$this->email = $email;
		$this->senha = $senha;
		$this->end = $end;
		$this->cep = $cep;			
	}

	function insert(){
		$conect = new Conexao();
		$conect->insertCliente($this->nome, $this->cpf, $this->email,
		 	 $this->senha, $this->end, $this->cep);
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
	function getEnd(){
		return $this->end;
	}
	function getCep(){
		return $this->cep;
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
	function setEnd($end){
		$this->end = $end;
	}
	function setCep($cep){
		$this->cep = [$cep];
	}
	

}