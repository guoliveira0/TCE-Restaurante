<?php
require_once '../../classes/util.class.php';
Util::isAdmin();

if(isset($_GET['id'])){
    require_once '../classes/usuarioservices.class.php';

    UsuarioServices::salvarEdicao(
        $_GET['id'],
        $_GET['nome'],
        $_GET['email'],
        $_GET['senha'],
        isset($_GET['admin'])
    );
}

header('Location:/test/sistema/admin/cadastrousuarios.php');