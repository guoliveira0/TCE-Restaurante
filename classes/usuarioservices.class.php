<?php

class UsuarioServices{
    public static function salvar($nome,$email,$senha, $perfil)
    {
        require_once 'r.class.php';
        R::setup(
            'mysql:host=127.0.0.1;dbname=sistemarestaurante',
            'root',
            ''
        );

        $usuario = R::dispense('usuario');
        $usuario->email = $email;
        $usuario->nome = $nome;
        $usuario->perfil = Perfil::Gerente;
        $usuario->senha = md5($senha . '__');

        R::store($usuario);
        R::close();
    }
}