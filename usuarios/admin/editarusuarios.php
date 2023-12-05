<?php
require_once '../../classes/util.class.php';
Util::isAdmin();

if (isset($_POST['id'])) {
    require_once '../../classes/usuarioservices.class.php';

    $usuario = UsuarioServices::procurarPorId($_POST['id']);

 if($usuario->perfil !== 'cliente'){
    $id = $usuario->id;
    $nome = $usuario->nome;
    $email = $usuario->email;
    $perfil = $usuario->perfil;}
else{
    
    echo ("<script>alert(\"Usuário não pode ser cliente!\");</script>");
   
    echo("<meta http-equiv=\"refresh\" content=\"0;url=escolherusuario.php\"> ");
    exit;
}

} else {
    header('Location:cadastrarusuarios.php');
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
    <title>Editar Usuários</title>
    <link rel="stylesheet" href="../../styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
    </style>

</head>

<body>
   
    <?php
    include '../../padrao/cabecalho.inc.php'; ?>
    <h1>Editar Usuário</h1>

    <main>
        <h1>Edição de Usuários</h1>

        <form action="processaredicao.php" method="post">
            <fieldset>
                <legend>Edição de Usuário</legend>

                <input type="hidden" name="id" value="<?= $id?>">

                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" value="<?= $nome ?>"><br>

                <label for="email">Email: </label>
                <input type="text" name="email" id="email" value="<?= $email ?>"><br>

                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha"><br>

                <select name="perfis" id="perfis">
                    <?php
                    if($perfil == 'caixa'){
                        echo "<option value=\"caixa\" selected>Caixa</option>";
                        echo "<option value=\"admin\">Administrador</option>";
                        echo "<option value=\"gerente\">Gerente</option>";
                    }
                    else if($perfil=='gerente'){
                        echo "<option value=\"gerente\" selected>Gerente</option>";
                        echo "<option value=\"admin\">Administrador</option>";
                        echo "<option value=\"caixa\">Caixa</option>";
                    }
                    else if($perfil == 'admin'){
                        echo "<option value=\"admin\" selected>Administrador</option>";
                        echo "<option value=\"caixa\">Caixa</option>";
                        echo "<option value=\"admin\">Administrador</option>";
                    }
                    
                    ?>
            
    
                </select><br>

                <a href="index.php">Voltar</a>
                <input type="submit" value="Salvar">

            </fieldset>
        </form>


    </main>

    <?php include '../../padrao/rodape.inc.php'; ?>

</body>

</html>
