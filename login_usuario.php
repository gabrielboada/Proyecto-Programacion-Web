<?php

    session_start();

    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login) >0){
        $_SESSION['usuario'] = $correo;
        header("location: iniciada_sesion.php");  
        exit;
    }else{
        echo '
           <script>
               alert("El usuario no existe, por favor verifique los datos ingresados");
               window.location = "login-registro.html";
           </script>
        ';
        exit; 
    }

?>