<?php

    require_once('../Model/conexion.php');
    require_once('../Model/ConsultasE.php');

    // Aterrizar los valores enviados en el name del form hasta el metodo POST en las diferentes variables
    $Nombres = $_POST['Nombres'];
    $Email = $_POST['Email'];
    $Mensaje = $_POST['Mensaje'];

    // Validamos que las variables no esten vacias
    if  (strlen($Nombres)>0 &&  strlen($Email)>0 && strlen($Mensaje)>0){

        $objetoConsultas = new ConsultasE();

        $result=$objetoConsultas->registrarConsulta($Nombres, $Email, $Mensaje);

    // Si los campos vienen vacios redireccionamos al formulario 
    }else{
        echo "<script> alert('Por favor complete los campos') </script>";
        echo '<script> location.href="../View/Client-site/blog-single.php"</script>';
    }
    

    
?>