<?php

require_once '../classes/protecao.class.php';
if (!Util::isGerente()){
    header('Location:./index.php');
}

if (isset($_POST['id'])) {
    require_once '../classes/usuarioservices.class.php';

    $usuario = UsuarioServices::localizarPorId($_GET['id']);

    $id = $usuario->id;
    $nome = $usuario->nome;
    $email = $usuario->email;
    $admin = $usuario->admin;

} else {
    header('Location:cadastrousuarios.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/549d3529d7.js" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>

<body>
    <?php
    include '../inc/cabecalho.inc.php'; ?>

    <main>
        <h1>Cadastro de Usuários</h1>

        <form action="processaredicao.php">
            <fieldset>
                <legend>Edição de Usuário</legend>

                <input type="hidden" name="id" value="<?= $id?>">

                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" value="<?= $nome ?>"><br>

                <label for="email">Email: </label>
                <input type="text" name="email" id="email" value="<?= $email ?>"><br>

                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha"><br>

                <label for="admin">Administrador: </label>
                <input type="checkbox" name="admin" id="admin" <?= $admin == 1? 'checked' : '' ?>><br>

                <a href="cadastrousuarios.php">Cancelar</a>
                <input type="submit" value="Salvar">

            </fieldset>
        </form>


    </main>

    <?php include '../inc/rodape.inc.php'; ?>

</body>

</html>
