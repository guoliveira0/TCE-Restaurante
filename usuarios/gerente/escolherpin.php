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
    <title>Histórico de Consumo</title>
    <link rel="stylesheet" href="../../styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
    </style>

</head>
<body>
    <?php include '../../padrao/cabecalho.inc.php'; ?>
    <h1>Histórico de Consumo</h1>
   
    <form action="relatoriocarteira.php" method="post">
    <fieldset>
        <legend>Histórico de Consumo</legend>
        <label for="pin">PIN: </label>
        <input type="password" name="pin" id="pin" min="1000" max="9999"><br>
        <a href="index.php">Voltar</a>
        <input type="submit" value="Enviar">
    </fieldset>
   
    </form>
</body>
</html>