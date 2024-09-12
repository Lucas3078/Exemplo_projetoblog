<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cidade WHERE id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
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
    <form action="AlteraCidadeExe.php" method="post">
    <fieldset>
        <legend>Cadastro de Cidades</legend>
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome"
                    value="<?php echo $row['nome']?>">
        </div>

        <div>
            <label for="estado">Estado</label>
            <select name="estado" id="estado">
                <option value="SP"
                    <?php echo $row['estado'] == "SP" ? "selected" : "" ?>>SP
                </option>
                <option value="RJ"
                    <?php echo $row['estado'] == "RJ" ? "selected" : "" ?>>RJ
                </option>
                <option value="MG"
                    <?php echo $row['estado'] == "MG" ? "selected" : "" ?>>MG
                </option>
                <option value="CE"
                    <?php echo $row['estado'] == "CE" ? "selected" : "" ?>>CE
                </option>
            </select>
        </div>

        <div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
        </div>
        <div>
            <button type="submit">Alterar</button>
        </div>
    </fieldset>
    </form>
    <a href="ListarCidade.php">Voltar</a>
</body>
</html>