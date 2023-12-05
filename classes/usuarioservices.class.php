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
        $usuarios = R::findOne('usuario', 'email LIKE ?', [$email]);
      
            if($usuarios->email == $email){
                echo ("<script>alert(\"Email já cadastrado\");</script>");
                echo("<meta http-equiv=\"refresh\" content=\"0;url=../../usuarios/admin/cadastrarusuarios.php\"> ");
                exit;
            

            }else{
                $usuario = R::dispense('usuario');
                $usuario->email = $email;
                $usuario->nome = $nome;
                $usuario->perfil = $perfil;
                $usuario->senha = md5($senha . '__');
                R::store($usuario);
                R::close();
            }
        

      
    }
    public static function salvarCliente($nome, $email, $senha, $perfil, $pin, $carteira, $cliente)
    {
        require_once 'r.class.php';
        R::setup(
            'mysql:host=127.0.0.1;dbname=sistemarestaurante',
            'root',
            ''
        );
        $usuarios = R::findOne('usuario', 'email LIKE ?', [$email]);
            if($usuarios->email == $email){
                echo ("<script>alert(\"Email já cadastrado\");</script>");
                echo("<meta http-equiv=\"refresh\" content=\"0;url=../../usuarios/admin/cadastrocliente.php\"> ");
                exit;
            
 
            }else{
                $usuario = R::dispense('usuario');
                $usuario->email = $email;
                $usuario->nome = $nome;
                $usuario->perfil = $perfil;
                $usuario->senha = md5($senha . '__');
                $usuario->pin = $pin;
                $usuario->carteira = $carteira;
                $usuario->habilitado = $cliente;
                R::store($usuario);
                R::close();
            }


    
    }
    public static function salvarClienteGerente($nome, $email, $senha, $perfil, $pin, $carteira, $cliente)
    {
        require_once 'r.class.php';
        R::setup(
            'mysql:host=127.0.0.1;dbname=sistemarestaurante',
            'root',
            ''
        );
        $usuarios = R::findOne('usuario', 'email LIKE ?', [$email]);
       
            if($usuarios->email==$email){
                echo ("<script>alert(\"Email já cadastrado\");</script>");
                echo("<meta http-equiv=\"refresh\" content=\"0;url=../../usuarios/gerente/cadastrocliente.php\"> ");
                exit;
            
 
            }else{
                $usuario = R::dispense('usuario');
                $usuario->email = $email;
                $usuario->nome = $nome;
                $usuario->perfil = $perfil;
                $usuario->senha = md5($senha . '__');
                $usuario->pin = $pin;
                $usuario->carteira = $carteira;
                $usuario->habilitado = $cliente;
                R::store($usuario);
                R::close();
            }
        

    
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
        R::trash('usuario', $id);
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
        date_default_timezone_set('America/Fortaleza');

        $noticia = R::dispense('noticia');
        $noticia->conteudo = $conteudo;
        $noticia->data = date('d/m/Y H:i');

        R::store($noticia);
        R::close();
    }
    public static function procurar()
    {
        require_once 'r.class.php';
        R::setup('mysql:host=127.0.0.1;dbname=sistemarestaurante', 'root', '');

        $usuarios = R::findAll('usuario');
        R::close();
        return $usuarios;
    }
    public static function procurarProduto()
    {
        require_once 'r.class.php';
        R::setup('mysql:host=127.0.0.1;dbname=sistemarestaurante', 'root', '');

        $produtos = R::findAll('produto');
        R::close();
        return $produtos;
    }

    public static function procurarPorId($id)
    {

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
    public static function procurarPorEmail($email)
    {

        require_once 'r.class.php';

        R::setup(
            'mysql:host=127.0.0.1;dbname=sistemarestaurante',
            'root',
            ''
        );


        $usuario = R::findOne('usuario', 'email LIKE ?', [$email]);
        R::close();
        if($usuario->perfil == 'cliente'){
            return $usuario;
        }
       
    }

    public static function procurarClientes()
    {
        require_once 'r.class.php';
        R::setup('mysql:host=127.0.0.1;dbname=sistemarestaurante', 'root', '');

        $usuarios = R::findAll('usuario', 'perfil = \'cliente\'');
        R::close();
        return $usuarios;
    }
    public static function salvarEdicaoCliente($id, $nome, $email, $senha,$pin, $carteira, $habilitado)
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
        $usuario->pin = $pin;
        $usuario->carteira = $carteira;
        $usuario->habilitado = $habilitado;
        R::store($usuario);

        R::close();
    }

    public static function salvarEdicao($id, $nome, $email, $senha, $perfil)
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
    public static function salvarProduto($nome, $preco, $codigo)
    {
        require_once 'r.class.php';

        R::setup(
            'mysql:host=127.0.0.1;dbname=sistemarestaurante',
            'root',
            ''
        );

        $produto = R::dispense('produto');

        $produto->nome = $nome;
        $produto->preco = $preco;
        $produto->codigo = $codigo;

        R::store($produto);
        R::close();
    }
}
