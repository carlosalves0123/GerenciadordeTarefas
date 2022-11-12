<?php
    session_start();
    include "conexao.inc";

    $nome=$_POST["f_nome"];
    $usuarioNome=$_POST["f_usuario"];
    $email=$_POST["f_email"];
    $senha=$_POST["f_senha"];

    //comando sql para verificar se ja existe um usuario cadastrado com esse nome de usuario
    $sql1="select * from tb_usuarios where username='$usuarioNome'";
    $res1=mysqli_query($con, $sql1);
    $linha1=mysqli_affected_rows($con);

    
    if($linha1 > 0){ 
        $_SESSION['msg'] = "<p style='color:  #ff4d4d;'>Nome de Usuario ja está em uso, Tente outro!!.</p>";
        header("Location:cadastrarInt.php");
    }else{
        $sql="INSERT INTO tb_usuarios VALUES('','$nome','$usuarioNome','$email','$senha')";
        $res=mysqli_query($con, $sql);
        $linha=mysqli_affected_rows($con);

         $_SESSION['msg'] = "<p style='color:  #ff4d4d;'>Usuário cadastrado com sucesso!!</p>"; 
            header("Location:cadastrarInt.php");
    }

    mysqli_close($con);

    /*if($linha > 0){
        if($nome == "" or $usuario == "" or $email == "" or $senha ==""){
            $_SESSION['msg'] = "<p style='color:  #ff4d4d;'>Usuário Não cadastrado!!</p>";
                header("Location:cadastrarInt.php");
        }else{
            $_SESSION['msg'] = "<p style='color:  #ff4d4d;'>Usuário cadastrado com sucesso!!</p>"; 
            header("Location:cadastrarInt.php");
        }
    }*/
?>

