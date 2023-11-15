<?php
    //inclue o arquivo de conexao
    include "conecta_postgres.inc";

    //recupera os dados do post
    $nome=$_POST["txtNome"];
    $cpf =$_POST["txtCPF"];
    $telefone=$_POST["txtTelefone"];
    $endereco = $_POST["txtEndereco"];

    //string sql
    $sql="INSERT INTO cliente ( cpf, nome, telefone, endereco)
            VALUES ('$cpf', '$nome', '$telefone', '$endereco')"
    //executa sql
    pg_query($sql);
    //fecha conexao
    pg_close($conexao);
    
    //echo "Gestor cadastrado com sucesso!";
    //substituido pelo redirecionamento

    //redireciona para listagem
    header("Location: lista_cadastros.php");
//passa como parametros via $_GET o id de cada cliente
    echo "<td><a href='form_atualiza_cliente.php?id_cliente=$cliente[id]'> atualizar </a><td>";
    echo "<td><a href='exclui_cliente.php?id_cliente=$cliente[id]'> excluir</a></td>";    
?>
