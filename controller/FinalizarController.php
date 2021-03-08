<?php
    session_start();
    error_reporting(0);
    $texto = "<table> <tr><th>Produto</th><th>Preço</th><th>Quantidade</th><th>Subtotal</th></tr>";
    $email = filter_var($_SESSION['email'], FILTER_SANITIZE_STRING);
    $total =0;
    foreach ($_SESSION['carrinho'] as $key =>$prod){                
        $subtotal = $prod[2]*$prod[3];
        $total +=$subtotal;
        $texto .= "Produto: ".$prod[1]." Preço: ".$prod[2]." Quantidade: ".
        $prod[3]." Subtotal: ".$subtotal."\n";
    }
    $texto .= "Total: ".$total."\n Obrigado pela preferência!";
    echo ($texto);
    if ($email) {
        if(mail($email, "Recibo de sua compra em RB Book Store", $texto)){
            header('Location: ../view/php/carrinho.php?msg=Compra finalizada com sucesso!');
        }
        else{
            header('Location: ../view/php/carrinho.php?msg=Não foi possível finalizar a compra!');
        }
    }
    else{
        header('Location: ../view/php/cadastrar.php?msg=Você precisa estar logado para finalizar uma compra!');
    }
    

