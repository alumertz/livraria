<?php session_start(); ?>

<script>


function validateCadastrar (res){

    var n = res.nome.value;
    if (n.match(/[a-zA-Z][a-zA-Z ]{2,}/i)==null) {                
        res.nome.focus();
        alert('Insira somente letras no campo nome!');                
        return false;
    }

    var c = res.cpf.value;
    if (c.match(/([0-9]){11}/)==null) {                
        res.cpf.focus();
        alert('Insira o CPF somente com números: 00000000000!');                
        return false;
    }

    var e = res.email.value;
    if (e.match(/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/i)==null) {                
        res.email.focus();
        alert('Insira um e-mail com este formato: exemplo@exemplo.exemplo.opcional!');                
        return false;
    }

    var cep = res.cep.value;
    if (cep.match(/([0-9]){8}/)==null) {                
        res.cep.focus();
        alert('Insira um CEP somente com números: 00000000!');                
        return false;
    }
}

</script>

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
            <form onsubmit="return validateCadastrar(this)" method="POST" action="../../controller/CadastrarController.php">

                <fieldset><legend>Dados pessoais</legend>
                <label>Nome:<input type="text" name="nome" placeholder="Nome completo"></label>
                <label>E-mail: <input type="email" name="email" placeholder="E-mail"></label>
                <label>CPF: <input type="text" name="cpf" placeholder="00000000000"></label>                
                
                </fieldset>
                
                <fieldset><legend>Endereço</legend>
                    <label>Endereço: <input type="text" name="endereco" placeholder="Rua, logradouro..., n°"></label>
                    
                    <label>CEP: <input type="text" name="cep" placeholder="000000000"></label>
                </fieldset>
                <label>Senha: <input type="password" name="senha" placeholder="Senha:"></label>
                <input type="submit">
                <?php echo $_REQUEST['msg2'] ?>
            </form>
            

        </div>
    </div>
    </main>


</body>