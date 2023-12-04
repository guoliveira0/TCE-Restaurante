<?php
require_once '../../classes/util.class.php';
Util::isAdmin();


if (isset($_POST['email'])) {
    require_once '../../classes/usuarioservices.class.php';

    $usuario = UsuarioServices::procurarPorEmail($_POST['email']);
    if($usuario->perfil == 'cliente'){
        $id = $usuario->id;
        $nome = $usuario->nome;
        $email = $usuario->email;
        $carteira = $usuario->carteira;
        $habilitado = $usuario->habilitado;
    }
    else{
    
        echo ("<script>alert(\"Usuário escolhido não é um cliente!\");</script>");
       
        echo("<meta http-equiv=\"refresh\" content=\"0;url=escolhercliente.php\"> ");
        exit;
    }

   

} else {
    header('Location:cadastrocliente.php');
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
    <title>Editar Clientes</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php
    include '../../padrao/cabecalho.inc.php'; ?>

    <main>
        <h1>Edição de Clientes</h1>

        <form action="processaredicaocliente.php" method="post">
            <fieldset>
                <legend>Edição de Cliente</legend>

                <input type="hidden" name="id" value="<?= $id ?>">

                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" value="<?= $nome ?>"><br>

                <label for="email">Email: </label>
                <input type="text" name="email" id="email" value="<?= $email ?>"><br>

                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha"><br>

                <label for="pin">Pin:</label>
                <input type="number" name="pin" id="pin"><br>

                <label for="carteira">Carteira: </label>
                <input type="checkbox" name="carteira" id="carteira" <?php echo ($carteira==1 ? 'checked' : '');?>><br>
                <label for="habilitado">Habilitado:</label>
                <input type="checkbox" name="habilitado" id="habilitado" <?php echo ($habilitado==1 ? 'checked' : '');?>><br>



                <a href="index.php">Voltar</a>
                <input type="submit" value="Salvar">

            </fieldset>
        </form>


    </main>

    <?php include '../../padrao/rodape.inc.php'; ?>

</body>

</html>