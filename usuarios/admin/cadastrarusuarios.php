<?php

require_once '../../classes/util.class.php';
Util::isAdmin();

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
</head>

<body>
    <?php include '../../padrao/cabecalho.inc.php'; ?>

    <main>
      <form action="cadastrarusuarios.php" method="post">
        <fieldset>
            <legend>Cadastrar Usuários</legend>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome"><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email"><br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha"><br>
            <label for="perfis">Cargos: </label>
            <select name="perfis" id="perfis">
              <option value="caixa">Caixa</option>
              <option value="cliente">Cliente</option>
              <option value="gerente">Gerente</option>
              <option value="admin">Administrador</option>
            </select>
            <input type="submit" value="Cadastrar">
        </fieldset>
      </form>
      <?php
      require_once '../../classes/usuarioservices.class.php';
      UsuarioServices::salvar($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['perfis'] );
      ?>
    </main>
    <?php include '../../padrao/rodape.inc.php'; ?>
</body>

</html>