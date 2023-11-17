<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
</head>

<body>
    <?php include './padrao/cabecalho.inc.php'; ?>

    <main>
        <?php
        require_once 'classes/r.class.php';
        require_once 'classes/perfil.class.php';
        R::setup(
            'mysql:host=127.0.0.1;dbname=sistemarestaurante',
            'root',
            ''
        );
        ?>

        <!-- Código para aparecer as noticias -->
        <?php
        // Criando uma lista de noticias de acordo cm o bd
        $noticias = R::findAll('noticias', ' ORDER BY id DESC')
        // Talvez # -> 'ORDER BY id DESC LIMIT 3' funcione
        ?>

        <?php 
        foreach ($noticias as $noticia) { ?>
            <div class="noticia">
                <p><?= substr($noticia->conteudo, 0, 100) . '...' ?></p>  <!-- Para aparecer '...' quando ultrapassa 100 caracteres !-->
            </div>
        <?php } ?>

        <p><a href="todasnoticias.php">Mais notícias</a></p>
    </main>

    <?php include './padrao/rodape.inc.php'; ?>
</body>

</html>
