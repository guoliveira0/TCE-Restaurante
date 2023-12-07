<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todas Noticias</title>
    <link rel="stylesheet" href="../../styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
    </style>

</head>

<body>
    <?php include '../../padrao/cabecalho.inc.php'; ?>

    <main>
        <div class="destaque-titulo">
            <h1>Todas as notícias</h1>
        </div>

        <?php
        require_once '../../classes/r.class.php';

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
        <?php
        foreach ($noticias as $noticia) { ?>
            <div class="noticia">
                <p><?= $noticia->conteudo ?></p>
            </div>
        <?php } ?>

    </main>

    <?php include '../../padrao/rodape.inc.php'; ?>

</body>

</html>