<?php
session_start();


    echo "<link rel=”stylesheet” type=”text/css” href=”estiloCadastro.css” />"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="estiloCadastro.css">
</head>
<body>
    <form name="f_cadUsuario" method="post" action="cadastrar.php">
        <div class="container">
            <div class="card">
                <h1>cadastrar</h1>
                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset ($_SESSION['msg']);
                }
                ?>
                <?php
                if(isset($_SESSION['msgnot'])){
                    echo $_SESSION['msgnot'];
                    unset ($_SESSION['msgnot']);
                }
                ?>
                <div class="label-float">
                    <input type="text" name="f_nome" id="nome" placeholder="">
                    <label for="nome">Nome</label>
                </div>

                <div class="label-float">
                    <input type="text" name="f_usuario" id="usuario" placeholder="">
                    <label for="usuario">Usuario</label>
                </div>

                <div class="label-float">
                    <input type="email" name="f_email" id="email" placeholder="">
                    <label for="email">Email</label>
                </div>

                <div class="label-float">
                    <input type="password" name="f_senha" id="senha" placeholder="">
                    <label for="senha">Senha</label>
                </div>


                <div class="label-float">
                    <input class="btn" type="submit" name="btncadastrar" id="btncadastrar" value="Cadastrar">
                </div>

                <div class="label-float">
                    <a class="logar" href="loginInt.php">Voltar Para Tela De Login</a>
                </div>
                
            </div>
        </div>
    </form>
</body>
</html>