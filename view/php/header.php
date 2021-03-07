<header> 

        <nav id="menu" style="border: red 3px" >
        <div style="display: inline;">
            <a href="./index.php">RB Book Store </a> Por Ana e Fabrício

            <div style="display: inline;border: red 3px">

                <ul style="display: inline;border: red 3px">
                    <?php if (!isset($_SESSION['nome'])) {
                        echo ("<li><a href='cadastrar.php'>Login/Cadastrar</a></li>");} ?>
                    <li><a href="carrinho.php">Carrinho</a></li>
                    <li><a href="faleConosco.php">Fale conosco</a></li>
                    
                </ul>

                
                <form style="display: inline;" method='POST' action="../../controller/PesquisarController.php">
                    <input type = "text" name="search_bar" id= "search_bar" placeholder="Pesquise um livro ou um autor" 
                    style="display: inline; width: 300px; margin-left:7px;">
                    <input type="submit" name="submit" value="Pesquisar">
                </form>

                <?php
                    if (isset($_SESSION['nome'])) {
                        echo "<h5 style='display: inline;'>Olá, ".$_SESSION['nome']."</h3>"; 
                        echo "<form style='display: inline;' method='POST' action='../../controller/DeslogarController.php'>
                            <button type='submit'> Deslogar</button>
                        </form>";
                    }
                ?>

                
                    
            </div>
        </div>
        

        
            
        </nav>

    </header>