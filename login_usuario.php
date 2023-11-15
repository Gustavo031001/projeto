<! DOCTYPE html>
<html>
    <head>
        <title> Autenticação do Gestor</title>
        <meta charset="UTF-8">
    </head>
<body>

<h2>Autenticação</h2>
    <form action="valida-usuario.php" method="post">
        Login: <input type="text" name="txtLogin"><br/>
        Senha: <input type="text" name=txtSenha><br/>
        <input type="submit" value="Logar"/>
</form>
<?php
    session_start();
    if(isset($_SESSION['mensagem'])){
        $msg = $_SESSION['mensagem'];

        echo '<p>'.$msg.'</p>';
        unset($_SESSION['mensagem']);
    }
?>
</body>
</html>
