<?php
require_once '../../classes/util.class.php';
Util::isAdmin();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuários</title>
    <link rel="stylesheet" href="../../styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
    </style>

</head>

<body>
    <?php include '../../padrao/cabecalho.inc.php'; ?>
    <main>
        <div class="destaque-titulo">
            <h1>Editar usuário</h1>
        </div>

        <form action="editarusuarios.php" method="post" class="user-form" id="editarusuario">
            <div class="form-group">
                <label for="id">ID do usuário:</label>
                <input type="number" name="id" id="id" min="0">
            </div>

            <div class="form-group">
                <input type="submit" value="Enviar">
            </div>
        </form>

    </main>

    <?php include '../../padrao/rodape.inc.php'; ?>

</body>

</html>