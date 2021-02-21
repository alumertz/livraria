<?php session_start(); ?>
<header> 

        <nav id="menu" style="border: red 3px" >
        <div>
            <a href="./index.php">RB Book Store </a>

            <div style="border: red 3px">

                <ul style="border: red 3px">
                    <li><a href="cadastrar.php">Login/Cadastrar</a></li>
                    <li><a href="carrinho.php">Carrinho</a></li>
                    <li><a href="faleConosco.php">Fale conosco</a></li>
                    
                </ul>
                <form method='POST' action="../../controller/PesquisarController.php">
                    <input type = "text" name="search_bar" id= "search_bar" placeholder="Pesquise aqui" 
                    style="display: inline; width: 300px; margin-left:7px;">
                    <input type="submit" name="submit">
                </form>

                <?php
                    if (isset($_SESSION['nome'])) {
                        echo '<h5>Olá, '.$_SESSION['nome'].'</h3>'; 
                        echo "<form method='POST' action='../../controller/DeslogarController.php'>
                            <button type='submit'> Deslogar</button>
                        </form>";
                    }
                ?>
                    
            </div>
        </div>
        

        
            
        </nav>

    </header>