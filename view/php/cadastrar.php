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

        <?php error_reporting(E_ALL & ~E_NOTICE); echo $_REQUEST['msg'];?>
        <div>
            <h3>Fazer login</h3>
            <form method="POST" action="../../controller/LoginController.php">
                <input type="email" name="email" placeholder="E-mail"></label>
                <input type="password" name="senha" placeholder="Senha"></label>
                <input type="submit" value="Login">
            </form>
            <?php error_reporting(E_ALL & ~E_NOTICE);            
            echo $_REQUEST['msg1'] ?>
        </div>
        <div>
            <h3>Cadastrar</h3>
            <form method="POST" action="../../controller/CadastrarController.php">

                <fieldset><legend>Dados pessoais</legend>
                <label>Nome:<input type="text" name="nome" placeholder="Nome completo"></label>
                <label>E-mail: <input type="email" name="email" placeholder="E-mail"></label>
                <label>CPF: <input type="text" name="cpf" placeholder="CPF"></label>                
                
                </fieldset>
                
                <fieldset><legend>Endereço</legend>
                    <label>Endereço: <input type="text" name="endereco" placeholder="Rua, logradouro..., n°"></label>
                    
                    <label>CEP: <input type="text" name="cep" placeholder="CEP"></label>
                </fieldset>
                <label>Senha: <input type="password" name="senha" placeholder="Senha:"></label>
                <input type="submit">
                <?php echo $_REQUEST['msg2'] ?>
            </form>
            

        </div>
    </div>
    </main>


</body>