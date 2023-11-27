<?php
require_once '../../classes/util.class.php';
Util::isAdmin();
require_once '../../classes/usuarioservices.class.php';
$id = $_GET['id'];
UsuarioServices::excluir($id);
header('Location:relatorioclientes.php');
