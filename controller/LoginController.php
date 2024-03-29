<?php

require_once ("../model/Cliente.php");

$email = filter_var($_REQUEST['email'], FILTER_SANITIZE_STRING);
$senha = filter_var($_REQUEST['senha'], FILTER_SANITIZE_STRING);

if (! empty($_REQUEST['email']) && !empty ($_REQUEST['senha'])) {
       
    
    $cliente = new Cliente();
    
    $isLoggedIn = $cliente->processLogin($email, $senha);

    if ($isLoggedIn){
        session_start();
        $_SESSION['id_cliente'] = $cliente->getId();
        $_SESSION['nome'] = $cliente->getNome();
        $_SESSION['email'] = $cliente->getEmail();
        header("Location: ../view/php/index.php");
    }
    else{
        header("Location: ../view/php/cadastrar.php?msg1=Cadastro não encontrado!");
    }
    exit();
    
}


