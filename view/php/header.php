<header> 

        <nav id="menu" style="border: red 3px" >
        <div>
            <a href="./home.php">RB Book Store </a>

            <div style="border: red 3px">

                <ul style="border: red 3px">
                    <li><a href="cadastrar.php">Login/Cadastrar</a></li>
                    <li><a href="carrinho.php">Carrinho</a></li>
                    <li><a href="faleConosco.php">Fale conosco</a></li>
                    
                </ul>
                <form method="GET" action="">
                        <input type="search">
                        <button type="submit"> Pesquisar</button>
                    </form>
                    <?php
                        if (isset($_SESSION['nome'])) {
                            echo '<h5>Olá, '.$_SESSION['nome'].'</h3>'; 
                        }
                    ?>
                    <form method="POST" action="../../controller/DeslogarController.php">
                        <button type="submit"> Deslogar</button>
                    </form>
            </div>
        </div>
        

        
            
        </nav>

    </header>