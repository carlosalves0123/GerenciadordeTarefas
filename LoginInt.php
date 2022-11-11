<?php
    session_start();
    echo "<link rel=”stylesheet” type=”text/css” href=”estilo.css” />"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="titulo">
        <h1>Gerenciador de tarefas</h1>
    </div>

    <div class="login">
        <img src="imagens/usuario.png" class="usuario" width="100vh" height="100vh" alt="">
        <h1>Login</h1>
        <form name="f_login" method="post" action="login.php">

            <p>Usuário</p>
            <input class="name" type="text" name="f_nome" placeholder="Nome de Usuário" required>
            <p>Senha</p>
            <input type="password" name="f_senha" placeholder="Insira a Senha" required>
            <input type="submit" name="f_btnLogar" value="Login">
            <a class="link" href="cadastrarInt.php">Ainda não possui uma conta?</a>

        </form>
    </div>
</body>
</html>