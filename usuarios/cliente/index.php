<?php
require_once '../../classes/util.class.php';
Util::isCliente();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal-Cliente</title>
</head>
<body>
    <?php include '../../padrao/cabecalho.inc.php';?>

    <main>
    <h1>Página Principal-Cliente</h1>
    <ul>
        <li><a href="historicodeconsumo.php">Histórico de Consumo</a></li>
    </ul>
    
        
    </main>

    <?php include '../../padrao/rodape.inc.php';?>
</body>
</html>
