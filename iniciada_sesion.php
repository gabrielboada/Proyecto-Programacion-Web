<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
           <script>
               alert("Debes iniciar sesion");
               window.location = "login-registro.html";
           </script>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta.charset="utf-8">
    <title>GABOS</title>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body>

    <h1>DULCES Y PASTELES GABOS</h1>

    <a href="cerrar_sesion.php" class="btnn btnn-light">Cerrar Sesión <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>

</body>
</html>