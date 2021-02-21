<?php

include 'Conexao.php';

class Livro{

	private $id;

	private $titulo;
	private $autor;
	private $editora;
	private $isbn;

	private $quant;
    private $preco;
    
    private $destaque;
    private $categoria;

	private $conect;

	
	
	function __construct(){
		$this->conect = new Conexao();	
	}

	function getLivro($id){
		$result = $this->conect->getLivro($id);
		
		if($result){
			$this->id = $result['id'];
			$this->titulo= $result['titulo'];
			$this->autor = $result['autor'];
			$this->editora = $result['editora'];
			$this->preco = $result['preco'];
			$this->quant = $result['quant'];
            $this->destaque = $result['destaque'];            
			$this->categoria = $result['categoria'];
			return true;	
		}
		else {
			return false;
		}
		
    }
    
    function getId(){
		return $this->id;
	}
	
	function getTitulo(){
		return $this->titulo;
	}
	function getAutor(){
		return $this->autor;
	}
	function getEditora(){
		return $this->editora;
	}
	function getIsbn(){
		return $this->isbn;
    }

    function getQuant(){
        return $this->quant;
    }
    function getPreco(){
        return $this->preco;
    }

	function getDestaque(){
		return $this->destaque;
	}
	function getCategoria(){
		return $this->categoria;
	}

	

	
	

}