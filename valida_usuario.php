<?php
    //inclue o arquivo de conexao
    require_once("conecta_postgres.inc");
    //inicia a sessão
    session_start  ();
    //recupera os dados do form
    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];
    //verifica se os campos estão vazios
    if(empty($login)){
        $_SESSION['mensagem']="Preencha o campo Login";
        header("location: login_usuario.php");

    }else if (empy($senha)){
        $_SESSION['mensagem']="Preencha o campo de Senha";
        header("location: login_usuario.php");
    }else{
        
        //SQL para consulta de usuario
        $sql = "SELECT * FROM usuario WHERE login='$login' AND senha='$senha'";
        //executa o sql
        $resultado = pg_query($sql);
        //manipula o retorno como um array associativo
        $dados = pg_fetch_assoc($resultado);
        
        //valida o login e a senha do usuario com o que retornou do banco de dados
        if($dados['login'] == $login and $dados ['senha'] ==$senha){
            //cria um array com os dados do usuario
            $usuario = array("login"=>$dados['login'], "senha"=>$dados['senha'], "perfil"=>$dados['perfil']);
            //coloca o array do usuario na sessão
            $_SESSION['usuario']=$usuario;
            //redireciona para pagina index.php
            header("Location: index.php");
            //caso os dados não sejam validos
        }else{
            //cria uma sessão para exibir uma mensagem de erro
            $_SESSION['mensagem']="Login ou Senha invalido";
            //redireciona para pagina de login
            header("Location: login_usuario.php");
        }
    }
?>