<?php
include('iniciar_sessao.php');
//Limpa variáveis de sessão

session_unset();
//Destroi a sessão

session_destroy();
//Volta para a página inicial

header('Location: inicial.php');
?>