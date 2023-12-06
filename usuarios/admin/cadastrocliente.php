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
    <title>Cadastro Cliente</title>
    <link rel="stylesheet" href="../../styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
    </style>

</head>

<body>

    <?php include '../../padrao/cabecalho.inc.php'; ?>

    <main>
      <h1>Cadastrar Cliente</h1>
      <form action="cadastrocliente.php" method="post">
        <fieldset>
            <legend>Cadastrar Usuários</legend>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required><br>
            <input type="hidden" name="perfil" id="perfil" value="cliente">
            <label for="pin">Pin:</label>
            <input type="password" name="pin" id="pin" required min="1000" max="9999"><br>
            <label for="carteira">Habilitar Carteira:</label>
            <input type="checkbox" name="carteira" id="carteira"><br>
            <label for="cliente">Habilitar Cliente:</label>
            <input type="checkbox" name="cliente" id="cliente"><br>
            <a href="index.php">Voltar</a>
            <input type="submit" value="Cadastrar">
        </fieldset>
      </form>
      <?php
      if(isset($_POST['senha'])){
      require_once '../../classes/usuarioservices.class.php';
      UsuarioServices::salvarCliente($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['perfil'] , $_POST['pin'], isset($_POST['carteira']), isset($_POST['cliente']));
      header('Location:cadastrocliente.php');}
     
      ?>
    </main>
    <?php include '../../padrao/rodape.inc.php'; ?>
</body>

</html>