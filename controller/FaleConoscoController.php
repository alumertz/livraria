<?php

    $texto = filter_var($_REQUEST['texto'],FILTER_SANITIZE_STRING);
    $email = filter_var($_REQUEST['email'],FILTER_SANITIZE_STRING);
    $titulo = filter_var($_REQUEST['titulo'],FILTER_SANITIZE_STRING);

    if ($_REQUEST['texto'] && $_REQUEST['email'] && $_REQUEST['titulo']) {
        if(mail('ana.lls@outlook.com',$titulo, $texto,'From: Aluno <'.$email.'s>')){
            echo "E-mail enviado com sucesso!";
        }
        else{
            echo "Não foi possível enviar o e-mail!";
        }
    }
    else{
        echo "Preencha todos os campos!";
    }
    

