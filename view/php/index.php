<?php session_start(); ?>
<?php require_once ("../../model/Conexao.php"); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!DOCTYPE html>



<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php include("header.php") ?>
    
    <main>
    <?php
        
        include("aside.php");

        $conect = new Conexao();
        
        $_SESSION['pesquisa'] = $conect->getDestaques();
        
        echo "<div class='body-text'> <br><h3> Destaques </h3>";
        include("lista.php");
        echo "</div>";
    
    ?>
    </main>


</body>
