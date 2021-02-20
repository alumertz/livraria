<!DOCTYPE html>

<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
</head>
<body>
    <header> RB Book Store 

        <nav id="menu">
        <input style="display: inline;">
            <ul>
                <li><a href="cadastrar.php">Entrar/Cadastrar</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
                <li><a href="faleConosco.php">Fale conosco</a></li>
    
            </ul>
        </nav>

    </header>
    <main>
        
    <aside>
        
        
        <li><a href="#">Ficção</a></li>
        <li><a href="#">Não-ficção</a></li>
    </aside>
    <div class="body-text">

    
        <div>
            <h3>Fazer login</h3>
            <form method="POST" action="../../controller/LoginController.php">
                <input type="email" name="emaillog" placeholder="E-mail"></label>
                <input type="password" name="senhalog" placeholder="Senha"></label>
            </form>
            <button>Login</button>
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
                
            </form>
            

        </div>
    </div>
    </main>


</body>