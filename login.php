<?php
    session_start();
    include "conexao.inc";

    $user=$_POST['f_nome'];
    $senha=$_POST['f_senha'];

    $sql="select * from tb_usuarios where username='$user' and senha='$senha'";
    $res=mysqli_query($con, $sql);
    $linhas=mysqli_affected_rows($con);

    if($linhas > 0){
        header("Location:paginaPrincipal.html");
    }else{
        echo "<script>alert('erro')</script>";
        
    }

    mysqli_close($con);
?>
