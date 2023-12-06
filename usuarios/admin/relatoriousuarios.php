<?php
require_once '../../classes/util.class.php';
Util::isAdmin();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Usuários</title>
    <link rel="stylesheet" href="../../styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
    </style>

</head>

<body>
    <?php include '../../padrao/cabecalho.inc.php' ?>
    <main>
        <div class="destaque-titulo">
            <h1>Lista de usuários</h1>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Perfil</th>
                <th>Excluir</th>
            </tr>
            <?php
            require_once '../../classes/usuarioservices.class.php';
            $usuarios = UsuarioServices::procurar();

            foreach ($usuarios as $x) {
                if ($x->perfil !== 'cliente') {
            ?>
                    <tr>
                        <td><?= $x->id ?></td>
                        <td><?= $x->nome ?></td>
                        <td><?= $x->email ?></td>
                        <td><?= $x->senha ?></td>
                        <td><?= $x->perfil ?></td>
                        <td><a href="excluir.php?id=<?= $x->id ?>">Excluir</a></td>

                    </tr>

            <?php
                }
            }
            ?>
        </table>
        
    </main>

    <?php include '../../padrao/rodape.inc.php' ?>
</body>

</html>