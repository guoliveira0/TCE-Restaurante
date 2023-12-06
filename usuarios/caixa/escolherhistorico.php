<?php
require_once '../../classes/util.class.php';
Util::isCaixa();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Consumo</title>
    <link rel="stylesheet" href="../../styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
    </style>
</head>

<body>
    <?php include '../../padrao/cabecalho.inc.php'; ?>
    <main>
        <div class="destaque-titulo">
            <h1>Histórico de consumo</h1>
        </div>

        <form action="historicoconsumo.php" method="post" class="user-form" id="form-historico-consumo">
            <div class="form-group">
                <label for="pin">PIN do cliente:</label>
                <input type="password" name="pin" id="pin" min="1000" max="9999">
            </div>

            <div class="form-group">
                <input type="submit" value="Enviar">
            </div>
        </form>



    </main>
    <?php include '../../padrao/rodape.inc.php' ?>

</body>

</html>