<?php
    session_start();
    $usuario = $_SESSION['usuario'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Página Principal</title>
        <meta charset="UTF-8">
</head>
<body>
    <?php
    if ($usuario['perfil']!="adm"){
         echo 'Você não tem permissão de acesso!';   
    }else{
        ?>
        <h3>Seja bem-vindo, <?php print($usuario['login'])?><h3>
            <p>Você tem perfil de acesso: <?php print($usuario['perfil']);?><p>

            <?php
    }
    ?>
    </body>
    </html>