<?php
    session_start();
    $texto = "<table> <tr><th>Produto</th><th>Preço</th><th>Quantidade</th><th>Subtotal</th></tr>";
    $email = filter_var($_SESSION['email'], FILTER_SANITIZE_STRING);
    print_r ($_SESSION);
    $total =0;
    foreach ($_SESSION['carrinho'] as $key =>$prod){                
        $subtotal = $prod[2]*$prod[3];
        $total +=$subtotal;
        $texto .= "<tr><td> ".$prod[1]."</td><td>".$prod[2]."</td><td>".
        $prod[3]."'></td><td>".$subtotal."</td></tr>";
    }
    $texto .= "<tr><td><b>Total</b></td><td></td><td></td><th>'.$total.'</th></tr>";

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
    
