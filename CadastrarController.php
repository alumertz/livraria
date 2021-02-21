<?php

    require_once "../model/Cliente.php";

    $pdo = new PDO('mysql:host=localhost;dbname=livraria','root','');
    if(!$pdo) die (mysqli_error($pdo));

    $nome = filter_var($_REQUEST['nome'],FILTER_SANITIZE_STRING);
    $email = filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL);
    $cpf = filter_var($_REQUEST['cpf'],FILTER_SANITIZE_STRING);

    $endereco = filter_var($_REQUEST['endereco'],FILTER_SANITIZE_STRING);
    $cep = filter_var($_REQUEST['cep'], FILTER_SANITIZE_STRING);

    $senha = filter_var($_REQUEST['senha'], FILTER_SANITIZE_STRING);

    
    

    if($nome==null || $endereco==null || $cpf==null || $endereco==null || $cep==null  ){
        header('Location:../view/php/cadastrar.php?msg=Preencha todos os campos!');  //Não funciona msg
    }
    
    
    else{
        $cliente = new Cliente($nome, $cpf, $email, $senha, $endereco, $cep);
        $cliente->insert();
        //header('Location:../view/php/cadastrar.php?msg=Cadastrado com sucesso!');  //Não funciona msg
    }
?>

