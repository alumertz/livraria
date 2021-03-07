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
        <h3>Carrinho</h3>
        <?php
            $total = 0;
            echo "<table id='tabela'>";
            echo '<tr><th>Produto</th><th>Preço</th><th>Quantidade</th><th>Subtotal</th></tr>';

            for ($x=0; $x<count($_SESSION['carrinho']); $x++){
                if(isset($_GET[$x])){
                    $_SESSION['carrinho'][$x][3]= filter_var($_GET[$x], FILTER_SANITIZE_NUMBER_INT);
                }
            }

            foreach ($_SESSION['carrinho'] as $key =>$prod){                
                $subtotal = $prod[2]*$prod[3];
                $total +=$subtotal;
                echo ("<tr><td>".$prod[1]."</td><td>".$prod[2]."</td><td><form><input type='text'
                  name='".$key ."' onchange='this.form.submit()'
                  value='".$prod[3]."'></form></td><td>".$subtotal."</td></tr>");
            }
            echo '<tr><td><b>Total</b></td><td></td><td></td><th>'.$total.'</th></tr>';
        ?>
        
        </div>
        <div> 
        <form method="POST" action="../../controller/FinalizarController.php">            
            <button type="submit"> Finalizar compra  </button>
        </form>
        <?php error_reporting(E_ALL & ~E_NOTICE);            
            echo $_REQUEST['msg'] ?>
    </main>


</body>
