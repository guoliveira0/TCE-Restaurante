<?php
require_once '../../classes/util.class.php';
Util::isGerente();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="../../styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
    </style>

</head>

<body>
    <?php include '../../padrao/cabecalho.inc.php';?>
    <h1>Editar Cliente</h1>

    <form action="editarcliente.php" method="post">
        <fieldset>
            <legend>Editar Cliente</legend>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <a href="index.php">Voltar</a>
            <input type="submit" value="Enviar">
        </fieldset>

    </form>
</body>

</html>