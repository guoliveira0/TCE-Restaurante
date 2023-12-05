<?php
require_once '../../classes/util.class.php';
Util::isGerente();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Clientes</title>
    <link rel="stylesheet" href="../../styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
    </style>

</head>

<body>
    <?php include '../../padrao/cabecalho.inc.php' ?>
    <main>
        <h1>Relatório Clientes</h1>

        <table>
            <tr>
            <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Carteira</th>
                <th>Habilitado</th>
                <th>Excluir</th>
            </tr>
            <?php
            require_once '../../classes/usuarioservices.class.php';
            $usuarios = UsuarioServices::procurarClientes();
            foreach($usuarios as $x){
            ?>
                 <tr>
                 <td><?=$x->id?></td>
                 <td><?=$x->nome?></td>
                 <td><?=$x->email?></td>
                 <td><?=$x->senha?></td>
                 <td><?=$x->carteira == 1 ? 'Habilitado' : 'Não habilitado'?></td>
                 <td><?=$x->habilitado == 1 ? 'Habilitado' : 'Não habilitado'?></td>
                 <td><a href="excluir.php?id=<?=$x->id?>">Excluir</a></td>

                </tr>
            
            <?php
            }
            ?>


        </table>
        <a href="index.php">Voltar</a>



    </main>

    <?php include '../../padrao/rodape.inc.php' ?>
</body>

</html>