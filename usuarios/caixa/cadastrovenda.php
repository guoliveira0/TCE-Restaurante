<?php

//require_once '../../classes/util.class.php';
//Util::isAdmin();

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
      <form action="cadastrovenda.php" method="post">
        <fieldset>
            <legend>Cadastrar Usuários</legend>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome"><br>
            <label for="preco">Preço:</label>
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