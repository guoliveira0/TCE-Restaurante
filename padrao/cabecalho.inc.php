<header>
    <h1>Sistema de Gestão</h1>
    <?php

    require_once dirname(__DIR__) . '/classes/util.class.php';
    if (Util::isLog()) {
        echo "<p>{$_SESSION['usuario']}</p> | <a href=\"/tcd2_luiz_lorena_mariana/padrao/logout.php\">Logout</a>";

        //logout

    } else {
        //form para autenticar
    ?>
    

        <form action="./padrao/autenticar.php" method="post">
            <fieldset>
                <legend>Login</legend>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
                <label for="senha">Senha: </label>
                <input type="password" name="senha" id="senha">
                <input type="submit" value="Enviar">   
                <?php
                    if(isset($_GET['naoautenticado'])){
                        echo '<br><span id="naoautenticado" style="color:red">Senha ou email incorretos, tente novamente.</span>';
                    }
                ?>  
            </fieldset>
        </form>


    <?php
    }


    ?>

</header>