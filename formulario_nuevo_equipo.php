<?php
session_start();
require_once 'constantes.php';

$_SESSION['datos'] = (isset ($_SESSION['datos']))?
        $_SESSION['datos']:Array ("", "", "","");
$_SESSION['errores'] = (isset ($_SESSION['errores']))?
        $_SESSION['errores']:Array (FALSE, FALSE, FALSE,FALSE);
$_SESSION['hayErrores'] = (isset ($_SESSION['hayErrores']))?
        $_SESSION['hayErrores']:FALSE;

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
            <p>Nombre: <br><input type="text" name="nombre"
                                  value="<?php echo $_SESSION['datos'][0]; ?>"/>
            <p>Descripción: <br> <input type="text" name="desc"
                                      value="<?php echo $_SESSION['datos'][1]; ?>"  />
            <p>IP: <br><input type="text" name="ip"
                              value="<?php echo $_SESSION['datos'][2]; ?>"/>
            <p>RAM: <br><input type="text" name="ram"
                               value="<?php echo $_SESSION['datos'][3]; ?>"/> 
            <p><input type="submit" value="Registrar"/></p>
        </form>
    </body>
</html>