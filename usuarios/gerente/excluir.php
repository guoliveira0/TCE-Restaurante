<?php
require_once '../../classes/util.class.php';
Util::isGerente();
require_once '../../classes/usuarioservices.class.php';
$id = $_GET['id'];
UsuarioServices::excluir($id);
header('Location:relatorioclientes.php');
