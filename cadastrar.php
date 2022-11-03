<?php
    session_start();
    include "conexao.inc";

    $nome=$_POST["f_nome"];
    $usuario=$_POST["f_usuario"];
    $email=$_POST["f_email"];
    $senha=$_POST["f_senha"];

    $sql="INSERT INTO tb_usuarios VALUES('','$nome','$usuario','$email','$senha')";
    $res=mysqli_query($con, $sql);
    $linha=mysqli_affected_rows($con);

    if($linha > 0){
        if($nome == "" or $usuario == "" or $email == "" or $senha ==""){
            $_SESSION['msgnot'] = "<p style='color: white;'>Usuário Não cadastrado!!</p>";
                header("Location:cadastrarInt.php");
        }else{
            $_SESSION['msg'] = "<p style='color: white;'>Usuário cadastrado com sucesso!!</p>"; 
            header("Location:cadastrarInt.php");
        }
    }
       
    
    /*if($linha > 0){
        $_SESSION['msg'] = "<p style='color: white;'>Usuário cadastrado com sucesso!!</p>"; 
        header("Location:cadastrarInt.php");
        }else{
            
            $_SESSION['msgnot'] = "<p style='color: white;'>Usuário Não cadastrado!!</p>";
            header("Location:cadastrarInt.php");
            
        }*/

    mysqli_close($con);
?>

