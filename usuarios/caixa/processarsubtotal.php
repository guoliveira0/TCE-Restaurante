<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_GET['quantidade'])){
    $quantidades = $_GET['quantidade'];
    foreach($quantidades as $produto->$quantidade){
    require_once '../../classes/usuarioservices.class.php';
      $subtotal = UsuarioServices::calcularSubtotal($produto,$quantidade);
      echo "<p>$subtotal</p>";
    }
}
?>
</body>
</html>


