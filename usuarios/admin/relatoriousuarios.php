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
</head>

<body>
    <?php include '../../padrao/cabecalho.inc.php' ?>
    <main>
        <h1>Relatório Usuários</h1>

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
                if($x->perfil !== 'cliente'){
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
            }}
            ?>


        </table>
        <a href="index.php">Voltar</a>


    </main>

    <?php include '../../padrao/rodape.inc.php' ?>
</body>

</html>