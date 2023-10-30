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
        
        R::setup(
            'mysql:host=127.0.0.1;dbname=sistemarestaurante',
            'root',
            ''
        );

        /*$usuario = R::dispense('usuario');
        $usuario->email = 'gerente2@email.com';
        $usuario->nome = 'Gerente2';
        $usuario->perfil = 'caixa';
        $usuario->senha = md5(123 . '__');
        R::store($usuario);
        R::close();*/
        $noticia = R::findOneForUpdate('noticia', 'data = (SELECT MAX(data) FROM noticia)');
        $noticia2 = R::findOneForUpdate('noticia', 'ORDER BY data DESC LIMIT 1 OFFSET 1');
        echo "$noticia";
        echo "$noticia2";
     


        ?>
    </main>

    <?php include './padrao/rodape.inc.php'; ?>
</body>

</html>