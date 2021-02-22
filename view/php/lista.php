<?php
    $result = $_SESSION['pesquisa'];
    if ($result != null){
    
        
        foreach($result as $row){  
            $caminho = "produto.php?id=". $row['id'];
            
            echo '<div> <h4><a href='.$caminho.'>'.$row['titulo'].' - '.
                $row['autor'].' - R$'.$row['preco'].'</a><br>';
        }              
        
        
    }
    else{
        echo '<td>."Sem resultados".</td>';
    } 
    ?>