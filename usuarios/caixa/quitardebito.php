<?php
require_once '../../classes/util.class.php';
Util::isCaixa();
require_once '../../classes/usuarioservices.class.php';
$codigo = $_GET['codigo'];
UsuarioServices::quitarDebito($codigo);
header('Location:relatoriocarteira.php');
