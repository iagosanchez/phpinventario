<html>
    <head>
        <title>Examen 2T</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="formulario">&nbsp;</div>
        <h1>¿Confirmar Borrado?</h1>
        <ul>
        <li><a href="index.php">Inicio</a></li>            
        <li><a href="listado.php">Listado</a></li>
        </ul>
     
        
    </body>
</html>



<?php
session_start();
require_once 'bbdd.php';


$_SESSION['IdProducto'] = (isset ($_REQUEST['IdProducto']))?
        $_REQUEST['IdProducto']:0;

$bd = conectaBd();

$consulta = "SELECT * FROM producto WHERE IdProducto=".$_SESSION['IdProducto'];
$resultado = $bd ->query($consulta);

if (!$resultado){
    $url = "error.php?msg_error=error_Consulta_Editar";
   header('Location:', $url);
    
} else {
       $registro = $resultado->fetch();
       
      if(!$registro) {
         $url = "error.php?msg_error=Error_Registro_Producto_inexistente";
        header('Location:'.$url);
           
       } else {
           $_SESSION['datos'][0] = $registro['NombreProducto'];
           $_SESSION['datos'][1] = $registro['PrecioUnidad'];
           $_SESSION['datos'][2] = $registro['UnidadesExistencia'];
           
           echo "<table border=1>";
           echo "<tr>";
        
           echo "<th>Nombre Producto</th>";
           echo "<th>Precio Unidad</th>";
           echo "<th>Unidades existencias</th>";
           echo "<tr>";
           
           echo "<td>";
           echo $registro['NombreProducto'];
           echo "</td>";
           echo "<td>";
           echo $registro['PrecioUnidad'];
           echo "</td>";
           echo "<td>";
           echo $registro['UnidadesExistencia'];
           echo "</td>";
           echo "</table>";
       }
  }
?>
<html>
    <head>
        <title>Confirmar borrado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div><a href="listado.php">Cancelar</a>
        <a href="borrar.php">Continuar</a></div>
    </body>
</html>