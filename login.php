<?php
    session_start();
    include "conexao.inc";

    $user=$_POST['f_nome'];
    $senha=$_POST['f_senha'];

    $sql="select * from tb_usuarios where username='$user' or senha='$senha'";
    $res=mysqli_query($con, $sql);
    $linhas=mysqli_affected_rows($con);

    while($registros = mysqli_fetch_array($res)){
        $id = $registros['usuarioid'];
        $nome = $registros['nome'];
        $nomeusuario = $registros['username'];
        $email = $registros['email'];
        $senhabd = $registros['senha'];
    }

    if($linhas > 0){
        if($user == $nomeusuario && $senha == $senhabd){
            $_SESSION['msgteste'] = "Bem vindo $nome seu id é: $id e seu email: $email";
            header("Location:paginaPrincipal.php");
        }else{
            $_SESSION['msgerro'] = "<p style='color: #ff4d4d;'>Usuário ou senha incorretos</p>";
        header("Location:loginInt.php");
        }
    }else{
        $_SESSION['msgerro'] = "<p style='color: #ff4d4d;'>Usuário não encontrado, crie uma conta</p>";
        header("Location:loginInt.php");
    }
    mysqli_close($con);
?>
