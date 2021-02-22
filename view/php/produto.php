<?php session_start(); ?>
<?php require_once ("../../model/Livro.php"); ?>

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
        
    <?php 
        $idLivro = $_GET['id']; 
        $livro = new Livro();
        $livro->getLivro($idLivro);
        echo "Título: ".$livro->getTitulo()."<br>";
        echo "Autor: ".$livro->getAutor()."<br>";
        echo "Editora: ".$livro->getEditora()."<br>";
        echo "ISBN: ".$livro->getIsbn()."<br>";
        echo "Preço: R$".$livro->getPreco()."<br>";
    ?>
    <form method="POST" action="<?php       
          
         echo ('../../controller/LivroController.php?id='.$idLivro); ?>">
        <input name="quant" value="1">
        <input type="submit" value="Comprar">
        
    </form>

    </div>
    
    
    </main>


</body>