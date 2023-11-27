<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>

<body>
    <?php include './padrao/cabecalho.inc.php'; ?>

    <main>
        <h1>Página Principal</h1>
        <ul>
            <li><a href="relatorioprodutos.php">Relatório de Produtos</a></li>
        </ul>
        <?php
        require_once 'classes/r.class.php';
        R::setup(
            'mysql:host=127.0.0.1;dbname=sistemarestaurante',
            'root',
            ''
        );
        ?>

        <!-- Código para aparecer as noticias -->
        <?php
        // Criando uma lista de noticias de acordo cm o bd
        $noticias = R::findAll('noticia', ' ORDER BY id DESC')
        // Talvez # -> 'ORDER BY id DESC LIMIT 3' funcione
        ?>

        <h2>Notícias</h2>
            <?php 
            foreach ($noticias as $noticia) { ?>
                <div class="noticia">
                <p><?= $noticia->conteudo ?></p>
                    <!-- <p> substr($noticia->conteudo, 0, 100) . '...' </p>  Não funcionou bem!-->
                </div>
            <?php } ?>

        <p><a href="todasnoticias.php">Mais notícias</a></p>
    </main>

    <?php include './padrao/rodape.inc.php'; ?>
</body>

</html>
