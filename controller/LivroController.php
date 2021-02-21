<?php
require_once ("../model/Livro.php");
session_start();

$idLivro = $_GET['id']; 
$livro = new Livro();
$livro->getLivro($idLivro);
if (isset($_SESSION['carrinho'])){
    array_push($_SESSION['carrinho'],[$idLivro, $livro->getTitulo(),$livro->getPreco(), $_REQUEST['quant']]);
    //$_SESSION['carrinho'] = [1=>[$idLivro, $livro->getTitulo(),$livro->getPreco(), $_REQUEST['quant']]];
}
else{
    $_SESSION['carrinho'] = [[$idLivro, $livro->getTitulo(),$livro->getPreco(), $_REQUEST['quant']]];
}


header('Location: ../view/php/carrinho.php');

