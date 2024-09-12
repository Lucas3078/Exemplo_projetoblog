<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Sistema de Cidades</title>
    <link rel="stylesheet" href="style/style1.css">
    <?php
        include('iniciar_sessao.php');
        if(empty($_SESSION['login'])){
            header("Location: login.php");
        }

        echo "ola". $_SESSION['login']['nome'];
    ?>
</head>
<body>
    <div class="container">

        <h1>Bem-vindo ao Sistema de Cadastros!</h1>
        <p>Gerencie informações sobre as cidades e clientes de forma eficiente e organizada.</p>
        <div class="buttons">
            <a href="CadastroCidade.html" class="button">Cadastrar nova cidade</a>
            <a href="ListarCidade.php" class="button">Listar cidades cadastradas</a>
            <a href="CadastroCliente.php" class="button">Cadastrar novo cliente</a>
            <a href="ListarCliente.php" class="button">Listar clientes cadastrados</a>
        </div>

        <a href="logout.php" class="button">Sair</a>
    </div>
</body>
</html>