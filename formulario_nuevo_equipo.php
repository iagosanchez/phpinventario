<?php
?>

<html>
    <head>
        <title>Equipos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div><b>Datos nuevo Equipo<b></div>
        <form action="grabar_nuevo_equipo.php" method="GET">
            <p>Nombre: <br><input type="text" name="nombre"/>
            <p>Descripción: <br> <input type="text" name="descripcion"/>
            <p>IP: <br><input type="text" name="ip"/>
            <p>RAM: <br><input type="text" name="ram"/> 
            <p><input type="submit" value="Registrar"/></p>
        </form>
    </body>
</html>