<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style3.css">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="loginexe.php" method="post">
        <fieldset>
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email">
        </div><p></p>

        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>

        <div>
            <button type="submit">Cadastrar</button>
        </div>
        </fieldset>
    </form>
    <a href="inicial.php">Voltar para a Tela Inicial</a>
</body>
</html>