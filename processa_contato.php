<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Processamento de Contato - ChromaColor</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="quem_somos.html">Quem Somos</a></li>
                <li><a href="produtos.html">Produtos</a></li>
                <li><a href="contatos.html">Contatos</a></li>
                <li><a href="reclamacoes.html">Reclamações</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Processamento de Contato</h1>
        <p>Dados recebidos do formulário:</p>

        <?php
        // Processa os dados do formulário
        $cpf = $_POST['cpf'];
        $celular = $_POST['celular'];
        $rg = $_POST['rg'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $email = $_POST['email'];

        // Exibe os dados
        echo "<p><strong>CPF:</strong> $cpf</p>";
        echo "<p><strong>Número de Celular:</strong> $celular</p>";
        echo "<p><strong>RG:</strong> $rg</p>";
        echo "<p><strong>Endereço:</strong> $endereco</p>";
        echo "<p><strong>CEP:</strong> $cep</p>";
        echo "<p><strong>E-Mail:</strong> $email</p>";
        ?>
    </main>

    <footer>
        <p>&copy; 2023 ChromaColor</p>
    </footer>
</body>
</html>
