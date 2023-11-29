<?php
require_once '../../classes/util.class.php';
Util::isGerente();

if(isset($_POST['id'])){
    require_once '../../classes/usuarioservices.class.php';

    UsuarioServices::salvarEdicaoCliente(
        $_POST['id'],
        $_POST['nome'],
        $_POST['email'],
        $_POST['senha'],
        $_POST['pin'],
        isset($_POST['carteira']),
        isset($_POST['habilitado'])
    );
}

header('Location:editarcliente.php');