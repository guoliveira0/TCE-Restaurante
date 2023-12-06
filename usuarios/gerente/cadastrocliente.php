<?php
require_once '../../classes/util.class.php';
Util::isGerente();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurante</title>
  <link rel="stylesheet" href="../../styles.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
  </style>

</head>

<body>
  <?php include '../../padrao/cabecalho.inc.php'; ?>

  <main>
    <div class="destaque-titulo">
      <h1>Cadastrar novo cliente</h1>
    </div>

    <form action="cadastrocliente.php" method="post" class="user-form" id="form-cadastro-cliente">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
      </div>

      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
      </div>

      <input type="hidden" name="perfil" id="perfil" value="cliente">

      <div class="form-group">
        <label for="pin">Pin:</label>
        <input type="password" name="pin" id="pin" required min="1000" max="9999">
      </div>

      <div class="form-group-checkbox" style="margin-left: 20px;">
        <label for="carteira">Habilitar Carteira:</label>
        <input type="checkbox" name="carteira" id="carteira">
        <label for="cliente">Habilitar Cliente:</label>
        <input type="checkbox" name="cliente" id="cliente">
      </div>

      <div class="form-group">
        <input type="submit" value="Cadastrar">
      </div>
    </form>
    <?php
    if (isset($_POST['senha'])) {
      require_once '../../classes/usuarioservices.class.php';
      UsuarioServices::salvarClienteGerente($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['perfil'], $_POST['pin'], isset($_POST['carteira']), isset($_POST['cliente']));
      header('Location:cadastrocliente.php');
    }
    ?>
  </main>
  <?php include '../../padrao/rodape.inc.php'; ?>
</body>

</html>