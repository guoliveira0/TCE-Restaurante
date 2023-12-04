<?php
require_once '../../classes/util.class.php';
Util::isCaixa();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Venda</title>
  <link rel="stylesheet" href="../../styles.css">
</head>

<body>
  <?php include '../../padrao/cabecalho.inc.php'; ?>

  <main>
    <h1>Cadastrar Venda</h1>
    <form action="cadastrovenda.php" method="post">
      <fieldset>
        <legend>Cadastrar Usuários</legend>
        <label for="codigo">Codigo Venda:</label>
        <input type="number" name="codigo" id="codigo">
        <input type="date" name="data" id="data"  value="<?php echo date('Y-m-d'); ?>">
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="preco" id="preco" step=0.01><br>
        <label for="codigo">Código:</label>
        <input type="number" name="codigo" id="codigo">

        <input type="submit" value="Cadastrar">
      </fieldset>
    </form>
    <?php
    require_once '../../classes/usuarioservices.class.php';
    UsuarioServices::salvarProduto($_POST['nome'], $_POST['preco'], $_POST['codigo']);
    ?>
  </main>
  <?php include '../../padrao/rodape.inc.php'; ?>
</body>

</html>