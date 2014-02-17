<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once 'funciones_bd.php';
?>


<html>
    <head>
        <title>INVENTARIO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>INVENTARIO</div>
        <div><a href="formulario_nuevobd.php"> Nuevo equipo </a></div>   
     
            <?php
        $bd = conectaDb();
        $consulta = 'SELECT * FROM equipo ORDER BY nombre';
        $resultado = $bd ->query($consulta);
        if (!$resultado){
            echo 'Error en la consulta';
        } else {
            echo "Nombre<br>";
        foreach ($resultado as $registro){
            echo $registro['nombre']."</br>";
                }
        }
        
        
        $bd = null;
        ?>
        </div>
    </body>
</html>
