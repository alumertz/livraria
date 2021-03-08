<?php

    session_start();

    
    $texto = filter_var($_REQUEST['texto'],FILTER_SANITIZE_STRING);    
    $titulo = filter_var($_REQUEST['titulo'],FILTER_SANITIZE_STRING);

    if (isset($_SESSION['nome'])){
        $nome = $_SESSION['nome'];
        $email = $_SESSION['email'];
    }
    else{
        $nome = filter_var($_REQUEST['nome'],FILTER_SANITIZE_STRING);
        $email = filter_var($_REQUEST['email'],FILTER_SANITIZE_STRING);
    }
    if ($_REQUEST['texto'] && $_REQUEST['email'] && $_REQUEST['titulo']) {
        if(mail('ana.lls@outlook.com',$titulo, $texto,'From:'.$nome.' <'.$email.'>')){
            header('Location: ../view/php/faleConosco.php?msg=E-mail enviado com sucesso!');
        }
        else{
            header('Location: ../view/php/faleConosco.php?msg=Não foi possível enviar o e-mail!');
        }
    }
    else{
        header('Location: ../view/php/faleConosco.php?msg=Preencha todos os campos!');
    }
    

