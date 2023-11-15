<?php
        include "conecta_postgres.inc";
        //consulta todos os cadastros
        $result = pg_query("SELECT * FROM cliente");
?>
<DOCTYPE html>
    <html>
        <head>
            <title>Gestão Cliente</title>
            <meta charset="UTF-8">
</head>
<body>
    <h1>Gestor Cadastrado</h1>
    <table border=1>
        <tr>
            <td>Atualizar</td>
            <td>Excluir</td>
            <td>Nome</td>
            <td>Telefone</td>
            <td>Endereco</td>
        </tr>
<?php
//converte cada registro em um array e exibe na tabela
        while($gestor = pg_fetch_assoc($result)){
            echo "<tr>";
            //passa como parametro via $_GET o id de cada cliente
            echo "<td><a href= 'form_atualiza_cliente.php?id_cliente[id]'> atualizar</a></td>";
            echo "<td><a href= 'exclui_cliente.php?id_cliente=$cliente[id]'> excluir</a></td>";
            //exibe os dados do cliente
            echo "<td>" .$gestor['nome']. "</td>";
            echo "<td>" .$gestor['telefone']. "</td>";
            echo "<td>" .$gestor['endereco']. "</td>";
            echo "</tr>";
        }
        //fecha conexao
        pg_close($conexao);
?>
</table>
<p>Cadastrar <a href="form_cadastra_cliente.html">novo </a>$gestor </p>
    </body>
    </html>
        
