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
            <input type="email" name="emaillog" placeholder="E-mail"></label>
            <input type="password" name="senhalog" placeholder="Senha"></label>
            <button>Login</button>
        </div>
        <div>
            <h3>Cadastrar</h3>
            <form method="POST" action="../../controller/formularios.php">

                <fieldset><legend>Dados pessoais</legend>
                <label>Nome:<input type="text" name="nome" placeholder="Nome completo"></label>
                <label>E-mail: <input type="email" name="email" placeholder="E-mail"></label>
                <label>CPF: <input type="text" name="cpf" placeholder="CPF"></label>                
                
                </fieldset>
                
                <fieldset><legend>Endereço</legend>
                    <label>Endereço: <input type="text" name="endereco" placeholder="Rua, logradouro..., n°"></label>
                    <label>Bairro: <input type="text" name="bairro" placeholder="Bairro"></label>
                    <label>Cidade: <input type="text" name="cidade" placeholder="Cidade"></label>
                    <label>Estado: <select id="estado" name="estado">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select></label>
                    <label>CEP: <input type="text" name="cep" placeholder="CEP"></label>
                </fieldset>
                <label>Senha: <input type="password" name="senha" placeholder="Senha:"></label>
                <input type="submit">
                
            </form>
            

        </div>
    </div>
    </main>


</body>