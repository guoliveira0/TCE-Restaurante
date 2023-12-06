<?php
require_once '../../classes/util.class.php';
Util::isCaixa();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
    </style>
</head>

<body>
    <?php include '../../padrao/cabecalho.inc.php' ?>
    <main>
        <h1>Relatório Produtos</h1>

        <table>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Data</th>
                <th>Valor</th>
                <th>Data de Pagamento</th>
         

            </tr>
            <?php
            require_once '../../classes/usuarioservices.class.php';
            $carteiras = UsuarioServices::procurarVenda($_POST['pin']);
            if($carteiras == NULL){
                echo ("<script>alert(\"Nenhum pagamento pendente!!\");</script>");
                echo ("<meta http-equiv=\"refresh\" content=\"0;url=../../usuarios/caixa/escolhercliente.php\"> ");
            }else{
            foreach ($carteiras as $x){
            ?>
                <tr>
                    <td><?= $x->id ?></td>
                    <td><?= $x->codigo ?></td>
                    <td><?= $x->data ?></td>
                    <td><?= $x->subtotal ?></td>
                 
                    <?php
                    if($x->dataPagamento == 0){
                        echo "<td>Não Pago</td>";
                    }
                    else{
                        
                    echo "<td> $x->dataPagamento</td>";
                }
            
            }

                
                    ?>
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