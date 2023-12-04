<header>

    <?php
    require_once dirname(__DIR__) . '/classes/util.class.php';
    if (Util::isLog()) {
        echo "<div id=\"usuariologado\">";
        echo "{$_SESSION['usuario']} | <a href=\"/tcd2_luiz_lorena_mariana/padrao/logout.php\">Logout</a>";
        echo "<div>";
    ?>
        <div id="linksheader">
            <nav>
                <ul>
                    <li><a href="/tcd2_luiz_lorena_mariana/relatorioprodutos.php">Produtos</a></li>
                    <li><a href="./todasnoticias.php">Ver todas notícias</a></li>
                </ul>
            </nav>
        </div>

    <?php
    } else {
        //form para autenticar
    ?>
        <!-- Login -->
        <div id="login">
            <form action="./padrao/autenticar.php" method="post">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
                <label for="senha">Senha: </label>
                <input type="password" name="senha" id="senha">
                <input type="submit" value="Enviar">
                <?php
                if (isset($_GET['naoautenticado'])) {
                    echo '<br><span id="naoautenticado" style="color:red">Senha ou email incorretos, tente novamente.</span>';
                }
                ?>
            </form>
        </div>

        <!-- Links do header -->
        <div id="linksheader">
            <nav>
                <ul>
                    <li><a href="./relatorioprodutos.php">Produtos</a></li>
                    <li><a href="./todasnoticias.php">Ver todas notícias</a></li>
                </ul>
            </nav>
        </div>
    <?php
    }
    ?>


</header>