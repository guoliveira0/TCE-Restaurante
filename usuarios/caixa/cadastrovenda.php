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
  <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
    </style>
</head>

<body>
  <?php include '../../padrao/cabecalho.inc.php'; ?>

  <main>
    <h1>Cadastrar Venda</h1>
    <form action="cadastrovenda.php" method="post">
      <fieldset>
        <legend>Cadastrar Usuários</legend>
        <label for="codigo">Codigo Venda:</label>
        <input type="number" name="codigo" id="codigo" require><br>
        <input type="date" name="data" id="data" value="<?php echo date('Y-m-d'); ?>" hidden>
        <label for="pin">Pin do Cliente:</label>
        <input type="number" name="pin" id="pin"><br>
        <label for="produtos">Produtos:</label>
        <select name="produtos" id="produtos">
          <?php
            require_once '../../classes/usuarioservices.class.php';
            $produtos = UsuarioServices::procurarProdutos();
            foreach($produtos  as $x){
              echo"<option value = \"$x->codigo\" >$x->nome</option>";
            }

          ?>
        </select><br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade"><br>
        <label for="aprazo">A prazo:</label>
        <input type="checkbox" name="aprazo" id="aprazo"><br>
        <input type="submit" value="Cadastrar">
      </fieldset>
    </form>
    <?php
    if(isset($_POST['codigo'])){
      //require_once '../../classes/usuarioservices.class.php';
      $subtotal = UsuarioServices::calcularSubtotal($_POST['produtos'], $_POST['quantidade']);
      $pin = UsuarioServices::procurarPorPin($_POST['pin']);
      $carteira = UsuarioServices::verificarCarteira($_POST['pin']);
      if($pin == true && $carteira ==true){
      UsuarioServices::SalvarVenda($_POST['codigo'], $_POST['data'], $subtotal, $pin->pin, isset($_POST['aprazo']));
      }else{
        echo ("<script>alert(\"Pin não encontrado ou Carteira não está habilitada\");</script>");
        echo("<meta http-equiv=\"refresh\" content=\"0;url=cadastrovenda.php\"> ");
      }
    }

    

    ?>
  </main>
  <?php include '../../padrao/rodape.inc.php'; ?>
</body>

</html>