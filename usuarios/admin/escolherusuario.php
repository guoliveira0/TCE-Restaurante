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
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Editar Usuário</h1>
   
    <form action="editarusuarios.php" method="post">
    <fieldset>
        <legend>Editar Usuário</legend>
        <label for="id">ID: </label>
        <input type="number" name="id" id="id"><br>
        <a href="index.php">Voltar</a>
        <input type="submit" value="Enviar">
    </fieldset>
   
    </form>
</body>
</html>