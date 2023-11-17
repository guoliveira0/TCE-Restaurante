<?php
//require_once '../../classes/util.class.php';
//Util::isGerente()

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
</head>
<body>
    <?php include './padrao/cabecalho.inc.php';?>

    <main>
    <h1>Gerente</h1>
    <ul>
        <li><a href="cadastrarusuarios.php">Cadastro de Usuários</a></li>
        <li><a href="editarusuarios.php">Edição de Usuários</a></li>
        <li><a href="relatoriousuarios.php">Relatório Usuários</a></li>
        <li><a href="cadastrarnoticias.php">Cadastro de Notícia</a></li>
        
    </ul>

    <h2>Notícias</h2>
    
    <?php
        require_once '../../classes/r.class.php';
            
        
        R::setup(
            'mysql:host=127.0.0.1;dbname=sistemarestaurante',
            'root',
            ''
        );
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

    <?php include '../inc/rodape.inc.php';?>
</body>
</html>
