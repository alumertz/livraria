<?php
    $pdo = new PDO('mysql:host=localhost;dbname=livraria','root','');
    if(!$pdo) die (mysqli_error($pdo));

    $nome = filter_var($_REQUEST['nome'],FILTER_SANITIZE_STRING);
    $email = filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL);
    $cpf = filter_var($_REQUEST['cpf'],FILTER_SANITIZE_STRING);

    $endereco = filter_var($_REQUEST['endereco'],FILTER_SANITIZE_STRING);
    $bairro = filter_var($_REQUEST['bairro'], FILTER_SANITIZE_STRING);
    $cidade = filter_var($_REQUEST['cidade'], FILTER_SANITIZE_STRING);
    $cep = filter_var($_REQUEST['cep'], FILTER_SANITIZE_STRING);
    $estado = $_REQUEST['estado'];
    $senha = filter_var($_REQUEST['senha'], FILTER_SANITIZE_STRING);
    $id = 2;
    if($nome==null || $endereco==null || $cpf==null || 
    $endereco==null || $bairro==null || $cidade==null || $cep==null || $estado==null ){
        //header('Location:banco2.php?msg=Preencha todos os campos!');  Não funciona
    }
    
    
    else{
        echo("noem ".$nome." cpf ".$cpf." email ".$email." senha".$senha);
        $comando = $pdo->prepare("INSERT INTO cliente (nome, email, cpf, senha, id_endereco) VALUES (?, ?, ?, ?, ?)");
        $comando->execute([$nome,$email,$cpf, $senha, 3]);
        //header('Location:cadastrar.html?msg=Cadastrado com sucesso!');  Não funciona
    }
?>

