<?php session_start(); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!DOCTYPE html>



<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
</head>
<body>
    
    <?php include("header.php") ?>
    
    <main>
    <?php include("aside.php") ?>
    <div class="body-text"> 
        <h3>Fale conosco</h3>
        <form method="POST" action="../../controller/FaleConoscoController.php">
        <input type="text" placeholder="Seu nome completo" name="nome"> </input>
        <input type="text" placeholder="Seu endereço de e-mail" name="email"> </input>
        <input type="text" placeholder="Título da mensagem" name="titulo"> </input>
         <textarea placeholder="Escreva suas dúvidas,
         considerações, críticas, etc." rows="5" name="texto"> </textarea>
        <button type="submit"> Enviar</button>
    </form>
    <?php  error_reporting(E_ALL & ~E_NOTICE);
        echo $_REQUEST['msg']; ?>

    </div>
    
    
    </main>


</body>
