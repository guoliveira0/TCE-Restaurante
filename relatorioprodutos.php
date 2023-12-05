
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Produtos</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include 'padrao/cabecalho.inc.php' ?>
    <main>
        <h1>Relatório Produtos</h1>

        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Código</th>

            </tr>
            <?php
            require_once 'classes/usuarioservices.class.php';
            $produtos = UsuarioServices::procurarProdutos();
            foreach ($produtos as $x) {
            ?>
                <tr>
                    <td><?= $x->id ?></td>
                    <td><?= $x->nome ?></td>
                    <td><?= $x->preco ?></td>
                    <td><?= $x->codigo ?></td>

                </tr>

            <?php
            }
            ?>


        </table>
        <a href="index.php">Voltar</a>



    </main>

    <?php include 'padrao/rodape.inc.php' ?>
</body>

</html>