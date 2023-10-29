<?php

class Util
{
    public static function protect()
    {
        session_start();

        if (isset($_SESSION['email'])) {
        } else {
            header("Location:index.php?acess");
            die();
        }
    }
    public static function logout()
    {
        if (!isset($_SESSION)) session_start();
        session_destroy();
        header("Loation:/autenticacao/index.php");
        die();
    }
    public static function isLog()
    {
        //session_start();
        if (!isset($_SESSION)) session_start();
        return isset($_SESSION['email']);
    }
    public static function valid()
    {
        session_start();
        return isset($_SESSION['email']);
    }
    public static function isAdmin()
    {
        session_start();
        if ($_SESSION['admin'] = TRUE) {
            header("Location:admin.php");
        } else {
            header("Location:403.php");
        }
    }
    public static function autenticarUsuario($email, $senha)
    {
        require_once 'r.class.php';

        R::setup(
            'mysql:host=127.0.0.1;dbname=sistemagestao',
            'root',
            ''
        );


        $usuarios = R::findOne('usuario', ' email = ? AND senha = ?', [$email, md5($senha . '__')]);
        if (isset($usuarios)) {
            session_start();
            $_SESSION['usuario'] = $usuarios['nome'];
            $_SESSION['email'] = $usuarios['email'];
            $_SESSION['admin'] = $usuarios['admin'];

            if ($usuarios['admin']) {
                header('Location:admin/index.php');
            } else {
                header('Location:user/index.php');
            }
        } else {

            header('Location:index.php');
        }
        R::close();
        //return count($usuarios) > 0;
    }
}
