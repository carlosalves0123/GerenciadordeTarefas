<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estiloPagPrincipal.css">
</head>
<body>
    <h1>Tudo ok</h1>
    <?php
        if(isset($_SESSION['msgteste'])){
                    echo $_SESSION['msgteste'];
                    unset ($_SESSION['msgteste']);
                }
        ?>

    <script src="teste.js"></script>
    
</body>
</html>