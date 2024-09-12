<?php
    include('Includes/Conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cliente
            WHERE email = '$email'";

    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        if($row['senha'] == $senha){
            include('iniciar_sessao.php');
            $_SESSION['login'] = $row;
            //VOLTO PARA A PÁG INICIAL

            header('Location: inicial.php');
        } else{
            echo "<h1>Senha inválida animal<br>
                  Sua senha é ". $row['senha']."</h1>";
        }
    } else{
        echo "<h1>Usuário não encontrado </h1>";
    }
?>