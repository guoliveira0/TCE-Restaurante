<header>
    <h1>Sistema de Gestão</h1>
    <?php

    require_once dirname(__DIR__) . '/class/util.class.php';
    if (Util::isLog()) {
        echo "<p>{$_SESSION['usuario']}</p> | <a href=\"/autenticacao/logout.php\">Logout</a>";

        //logout

    } else {
        //form para autenticar
    ?>
    

        <form action="/autenticacao/autenticar.php" method="get">
            <fieldset>
                <legend>Login</legend>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
                <label for="senha">Senha: </label>
                <input type="password" name="senha" id="senha">
                <input type="submit" value="Enviar">
            </fieldset>
        </form>


    <?php
    }


    ?>

</header>