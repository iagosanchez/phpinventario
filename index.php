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
        
        <div> Test de prueba de conexión </br>
            <?php
        $bd = conectaDb();
        $consulta = 'SELECT * FROM equipo ORDER BY nombre';
        $resultado = $bd ->query($consulta);
        if (!$resultado){
            echo 'Error en la consulta';
        } else {
            echo "Equipo<br>Nombre<br>";
        foreach ($resultado as $registro){
            echo $registro['nombre']."</br>";
                }
        }
        
        
        $bd = null;
        ?>
        </div>
    </body>
</html>
