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
        echo "Conexión realizada con éxito";
        $bd = null;
        ?>
        </div>
    </body>
</html>
