
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
        <br> 
            <table>
                <?php
                $result = $_SESSION['pesquisa'];
                if ($result != null){
                
                    
                    foreach($result as $row){  
                        $caminho = "produto.php?id=". $row['id'];
                       
                        echo '<div> <h4><a href='.$caminho.'>'.$row['titulo'].' - '.
                            $row['autor'].' - '.$row['preco'].'</a><br>';
                    }              
                    
                    
                }
                else{
                    echo '<td>."Sem resultados".</td>';
                } 
                ?>
        <br>
        </div>
    </main>


</body>