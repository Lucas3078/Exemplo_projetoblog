<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style3.css">
</head>
<body>
    <form action="CadastroClienteExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Clientes</legend>
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">
        </div><p></p>

        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email">
        </div><p></p>

        <div>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha">
        </div>

        <h3>Situação</h3>
        <div id="ativo">
            <label for="operacao">Ativo</label>
            <input type="hidden" name="ativo" id="ativo" value="0">
            <input type="checkbox" name="ativo" id="ativo" value="1">
        </div><p></p>

        <div>
            <label for="cidade">Cidade</label>
            <select name="cidade" id="cidade">
                <?php
                include('includes/conexao.php');
                $sql = "SELECT * FROM cidade";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                    echo "<option value='".$row['id']."'>"
                         .$row['nome']."/".$row['estado']
                         ."</option>";
                }
                ?>
            </select>
        </div>
        
    <button type="submit">Cadastrar</button>
        
    </fieldset>
    </form>
    <a href="inicial.php">Voltar para a Tela Inicial</a>
</body>
</html>