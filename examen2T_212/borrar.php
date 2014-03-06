<?php
session_start();
require_once 'bbdd.php';


$db = conectaBd();
   $id = $_SESSION['IdProducto'];
    
    
    $consulta = "DELETE FROM producto 
        WHERE IdProducto= :IdProducto";
    
    $resultado = $db->prepare($consulta);
    if ($resultado->execute(array(":IdProducto" => $IdProducto))) {
        //vaciamos las variables de sesión si todo va bien.
        unset ($_SESSION['datos']);
        unset ($_SESSION['errores']);
        unset ($_SESSION['hayErrores']);
       // redirigimos a la página del listado 
        $destino = "listado.php";
        header('Location:'.$destino);
    } else {
        print "<p>Error al crear el registro.</p>\n";
    }

    $db = null;

