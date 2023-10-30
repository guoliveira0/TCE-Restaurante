<?php

class UsuarioServices
{
    public static function salvar($nome, $email, $senha, $perfil)
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
        $usuario->perfil = $perfil;
        $usuario->senha = md5($senha . '__');
        R::store($usuario);
        R::close();
    }
    public static function excluir($id)
    {
        require_once 'r.class.php';
        if (!R::testConnection()) {
            R::setup(
                'mysql:host=127.0.0.1;dbname=sistemarestaurante',
                'root',
                ''
            );
        }
        R::trash('$usuario', $id);
        R::close();
    }
    public static function salvarnoticia($titulo,$conteudo)
    {
        require_once 'r.class.php';
        R::setup(
            'mysql:host=127.0.0.1;dbname=sistemarestaurante',
            'root',
            ''
        );

        $noticia = R::dispense('noticia');
        $noticia->titulo = $titulo;
        $noticia->conteudo = nl2br($conteudo);

        R::store($noticia);
        R::close();
    }
}
