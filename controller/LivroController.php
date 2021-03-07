<?php
require_once ("../model/Livro.php");
session_start();

$idLivro = $_GET['id']; 
$livro = new Livro();
$livro->getLivro($idLivro);

if (isset($_SESSION['carrinho'])){
    $already_in = 0;
    for ($x=0; $x<count($_SESSION['carrinho']); $x++){
        
        if ($_SESSION['carrinho'][$x][0]==$idLivro){
            $_SESSION['carrinho'][$x][3]+=$_REQUEST['quant'];
            $already_in = 1;
        }
    }
    if (!$already_in){
        array_push($_SESSION['carrinho'],[$idLivro, $livro->getTitulo(),$livro->getPreco(), $_REQUEST['quant']]);
    }
    
}
else{
    $_SESSION['carrinho'] = [[$idLivro, $livro->getTitulo(),$livro->getPreco(), $_REQUEST['quant']]];
}


header('Location: ../view/php/carrinho.php');

