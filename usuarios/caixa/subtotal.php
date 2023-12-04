<?php

require_once '../../classes/util.class.php';
Util::isCaixa();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Venda</title>
</head>

<body>
    <?php include '../../padrao/cabecalho.inc.php'; ?>

    <main>
        <h1>Cadastrar Venda</h1>
        <form action="processarsubtotal.php" method="get">
            <fieldset>
                <legend>Cadastrar Usuários</legend>


                <?php
                require_once '../../classes/usuarioservices.class.php';
                $produtos = UsuarioServices::procurarProdutos();
                foreach ($produtos as $key => $produto) {
                    echo "<label for=\"$key\">$produto->nome:</label>";
                    echo "<select name=\"quantidade[$key]\">";
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<option value=\"$i\">$i</option>";
                    }
                    echo "</select><br>";
                }
                    ?>
                <input type="submit" value="Adicionar ao carrinho">
            </fieldset>
        </form>
        ?>
    </main>
    <?php include '../../padrao/rodape.inc.php'; ?>
</body>

</html>