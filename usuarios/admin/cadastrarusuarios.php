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
  <title>Cadastrar Usuários</title>
  <link rel="stylesheet" href="../../styles.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
  </style>

</head>

<body>
  <?php include '../../padrao/cabecalho.inc.php'; ?>

  <main>
    <div class="destaque-titulo">
      <h1>Cadastrar novo usuário</h1>
    </div>

    <form id="cadastrarusuario" action="cadastrarusuarios.php" method="post">

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

        <div class="form-group">
          <label for="perfis">Cargos:</label>
          <select name="perfis" id="perfis" required>
            <option value="caixa">Caixa</option>
            <option value="gerente">Gerente</option>
            <option value="admin">Administrador</option>
          </select>
        </div>

        <div class="form-group">
          <input type="submit" value="Cadastrar">
        </div>
    </form>


    <?php
    if (isset($_POST['senha'])) {
      require_once '../../classes/usuarioservices.class.php';
      UsuarioServices::salvar($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['perfis']);
      header('Location:cadastrarusuarios.php');
    }
    ?>

  </main>
  <?php include '../../padrao/rodape.inc.php'; ?>
</body>

</html>