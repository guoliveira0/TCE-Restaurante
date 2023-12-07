<?php
require_once '../../classes/util.class.php';
Util::isAdmin();


if (isset($_POST['email'])) {
    require_once '../../classes/usuarioservices.class.php';

    $usuario = UsuarioServices::procurarPorEmail($_POST['email']);
    if ($usuario->perfil == 'cliente') {
        $id = $usuario->id;
        $nome = $usuario->nome;
        $email = $usuario->email;
        $carteira = $usuario->carteira;
        $habilitado = $usuario->habilitado;
    } else {

        echo ("<script>alert(\"Usuário escolhido não é um cliente!\");</script>");

        echo ("<meta http-equiv=\"refresh\" content=\"0;url=escolhercliente.php\"> ");
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
    <link rel="stylesheet" href="../../styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
    </style>

</head>

<body>

    <?php
    include '../../padrao/cabecalho.inc.php'; ?>

    <main>
        <div class="destaque-titulo">
            <h1>Editar cliente</h1>
        </div>

        <form action="processaredicaocliente.php" method="post" class="user-form" id="form-editar-cliente">
            <input type="hidden" name="id" value="<?= $id ?>">

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="<?= $nome ?>">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" value="<?= $email ?>">
            </div>

            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha">
            </div>

            <div class="form-group">
                <label for="pin">Pin:</label>
                <input type="password" name="pin" id="pin">
            </div>

            <div class="form-group">
                <label for="carteira">Carteira:</label>
                <input type="checkbox" name="carteira" id="carteira" <?php echo ($carteira == 1 ? 'checked' : ''); ?>>
            </div>

            <div class="form-group">
                <label for="habilitado">Habilitado:</label>
                <input type="checkbox" name="habilitado" id="habilitado" <?php echo ($habilitado == 1 ? 'checked' : ''); ?>>
            </div>

            <div class="form-group">
                <input type="submit" value="Salvar">
            </div>
        </form>



    </main>

    <?php include '../../padrao/rodape.inc.php'; ?>

</body>

</html>