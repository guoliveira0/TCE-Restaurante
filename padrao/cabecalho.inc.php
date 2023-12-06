<header>
    <?php
    require_once dirname(__DIR__) . '/classes/util.class.php';
    if (Util::isLog()) {
        $user = $_SESSION['perfil'];

        // Se for administrador
        if($user == "admin"){
        ?>

        <div id="linksheader">
            <nav>
                <ul>
                    <li><a href="/tcd2_luiz_lorena_mariana/relatorioprodutos.php">Produtos</a></li>
                    <li><a href="./todasnoticias.php">Ver todas notícias</a></li>
                    <li>|</li>  
                    <li class="dropdown">
                        <a href="">Admin</a>

                        <div class="dropdown-lista">
                            <a href="cadastrarnoticias.php">Cadastro de notícias</a>
                            <a href="cadastrarusuarios.php">Cadastro de Usuários</a>
                            <a href="escolherusuario.php">Edição de Usuários</a>
                            <a href="relatoriousuarios.php">Relatório Usuários</a>
                            <a href="cadastrocliente.php">Cadastro de Clientes</a>
                            <a href="escolhercliente.php">Editar Clientes</a>
                            <a href="relatorioclientes.php">Relatório Clientes</a>
                        </div>
                    </li>
                    
                     <?php
                     echo "<li>";
                     echo "<a href=\"/tcd2_luiz_lorena_mariana/padrao/logout.php\">Logout</a>";
                     echo "</li>";
                    ?>
                </ul>
            </nav>
        </div>
        <?php 
        } 
        ?>

        <!-- Se for gerente -->
        <?php
        if($user == "gerente"){
        ?>
        
        <div id="linksheader">
            <nav>
                <ul>
                    <li><a href="/tcd2_luiz_lorena_mariana/relatorioprodutos.php">Produtos</a></li>
                    <li><a href="./todasnoticias.php">Ver todas notícias</a></li>
                    <li>|</li>  
                    <li class="dropdown">
                        <a href="">Gerente</a>
                        <div class="dropdown-lista">
                            <a href="cadastrocliente.php">Cadastro de Clientes</a>
                            <a href="relatorioclientes.php">Relatório de Clientes</a>
                            <a href="cadastrarnoticias.php">Cadastro de Notícia</a>
                            <a href="cadastrarproduto.php">Cadastro de Produtos</a>
                            <a href="escolhercliente.php">Editar Clientes</a>
                            <a href="escolherpin.php">Relatório Carteira</a>
                        </div>
                    </li>
                    
                     <?php
                     echo "<li>";
                     echo "<a href=\"/tcd2_luiz_lorena_mariana/padrao/logout.php\">Logout</a>";
                     echo "</li>";
                    ?>
                </ul>
            </nav>
        </div>
        <?php 
        } 
        ?>


    <?php
    } else {
        //form para autenticar
    ?>
        <!-- Links do header -->
        <div id="linksheader">
            <nav>
                <ul>
                    <li><a href="./relatorioprodutos.php">Produtos</a></li>
                    <li><a href="./todasnoticias.php">Ver todas notícias</a></li>
                    <li>|</li>
                    <li class="dropdown">
                        <a href="">Login</a>
                        <div class="dropdown-menu">
                            <form action="./padrao/autenticar.php" method="post">
                                <label for="email">Email: </label>
                                <input type="email" name="email" id="email"><br><br>
                                <label for="senha">Senha: </label>
                                <input type="password" name="senha" id="senha"><br><br>
                                <input class="entrar" type="submit" value="Entrar">
                                <?php
                                if (isset($_GET['naoautenticado'])) {
                                    echo '<span id="naoautenticado" style="color:red; font-size: 12px;">Senha ou email incorretos, tente novamente.</span>';
                                }
                                ?>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    <?php
    }
    ?>


</header>