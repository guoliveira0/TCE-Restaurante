<?php
        require_once 'classes/r.class.php';
    
        R::setup(
            'mysql:host=127.0.0.1;dbname=sistemarestaurante',
            'root',
            ''
        );

        $usuario = R::dispense('usuario');
        $usuario->email = 'admin@mail.com';
        $usuario->nome = 'Admin';
        $usuario->perfil = 'admin';
        $usuario->senha = md5(123 . '__');
        R::store($usuario);
        R::close();
