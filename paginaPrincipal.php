<?php
    session_start();
    include "conexao.inc";
    echo "<link rel=”stylesheet” type=”text/css” href=estiloPagPrincipal.css” />"
?>

<?php

    

    if(isset($_POST['tarefa'])){
        $tarefa = filter_input(INPUT_POST, 'tarefa', FILTER_SANITIZE_SPECIAL_CHARS);
        $query="INSERT INTO tb_tarefas VALUES ('', tarefadescricao, 0, 1";
        $stm = $con->prepare($query);
        $stm->bindparam('tarefadescricao', $tarefa);
        $stm->execute();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <style>
        body{
            display: flex;
            background-color: white;
            height: 60px;
        }

        form{
            padding: 10px;
            border: 2px solid grey;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <form method="POST">
        Nova Tarefa: <input type="text" name="tarefa">
        <input type="submit" value="Incluir">
    </form>
    
    
</body>
</html>


<?php
        /*if(isset($_SESSION['msgteste'])){
                    echo $_SESSION['msgteste'];
                    unset ($_SESSION['msgteste']);
                }*/
?>