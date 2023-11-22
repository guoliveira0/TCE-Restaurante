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
    public static function salvarCliente($nome, $email, $senha, $perfil)
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
    public static function salvarnoticia($conteudo)
    {
        require_once 'r.class.php';
        R::setup(
            'mysql:host=127.0.0.1;dbname=sistemarestaurante',
            'root',
            ''
        );
        date_default_timezone_get("America/Fortaleza");

        $noticia = R::dispense('noticia');
        $noticia->conteudo = $conteudo;
        $noticia->data = date('d/m/Y H:i');

        R::store($noticia);
        R::close();
    }
    public static function procurar(){
        require_once 'r.class.php';
        R::setup('mysql:host=127.0.0.1;dbname=sistemarestaurante', 'root', '');

        $usuarios = R::findAll('usuario');
        R::close();
        return $usuarios;
    }
    public static function procurarPorId($id){

        require_once 'r.class.php';
        
        R::setup(
            'mysql:host=127.0.0.1;dbname=sistemarestaurante',
            'root',
            ''
        );

        $usuario = R::load('usuario', $id);
        R::close();
        return $usuario;
    }
    public static function procurarClientes(){
        require_once 'r.class.php';
        R::setup('mysql:host=127.0.0.1;dbname=sistemarestaurante', 'root', '');

        $usuarios = R::findAll('usuario', 'perfil = \'cliente\'');
        R::close();
        return $usuarios;
    }
    public static function salvarEdicao($id ,$nome, $email, $senha, $perfil)
    {
        require_once 'r.class.php';

        R::setup(
            'mysql:host=127.0.0.1;dbname=sistemarestaurante',
            'root',
            ''
        );

        $usuario = R::dispense('usuario');

        $usuario->id = $id;
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->senha = md5($senha . '__');
        $usuario->perfil = $perfil;

        R::store($usuario);

        R::close();
    }
    
    
}
