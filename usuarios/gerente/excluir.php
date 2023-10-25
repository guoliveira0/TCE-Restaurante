<?php
require_once '../classes/usuarioservices.class.php';
$id = $_GET['id'];
UsuarioServices::excluir($id);
header('Location:relatoriousuarios.php');
