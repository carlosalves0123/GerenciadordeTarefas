<?php
    session_start();
    include "conexao.inc";

    $user=$_POST['f_nome'];
    $senha=$_POST['f_senha'];

    $sql="select id from tb_usuarios where username='$user' and senha='$senha'";
    $res=mysqli_query($con, $sql);
    $linhas=mysqli_affected_rows($con);

    while($registros = mysqli_fetch_array($res)){
        $id = $registros['id'];
    }

    if($linhas > 0){
        $_SESSION['msgteste'] = "<p> o ID do usuario é: $id";
        header("Location:paginaPrincipal.php");
        
    }else{
        echo "<script>alert('erro')</script>";
        
    }

    mysqli_close($con);
?>
