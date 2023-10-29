<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
</head>

<body>
    <?php include '../inc/cabecalho.inc.php'; ?>

    <main>
        <h1>Cadastro de Notícia</h1>

      <form action="cadastronoticias.php" method="post">
        <fieldset>
            <legend>Notícia</legend>
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo"><br>

            <label for="conteudo">Conteúdo:</label>
            <textarea name="conteudo" id="conteudo" rows="10" cols="50"></textarea>

            <input type="submit" value="Cadastrar">
        </fieldset>
      </form>
      <?php
      require_once '../classes/usuarioservices.class.php';
      UsuarioServices::salvarnoticia($_POST['titulo'], $_POST['conteudo']); // Checar salvarnoticia em usuarioservices!!
      ?>
    </main>
    <?php include 'inc/rodape.inc.php'; ?>
</body>

</html>