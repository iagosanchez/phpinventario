<?php
require_once 'funciones_bd.php';

$bd = conectaBd();

$titulo = $_REQUEST['titulo'];
$url = $_REQUEST['url'];

$consulta = "INSERT INTO software
(titulo, url)
VALUES (:titulo, :url)";
$resultado = $bd->prepare($consulta);
if ($resultado->execute(array(":titulo" => $titulo, ":url" => $url))) {
    $url2 = 'listado_software.php';
    header('location:'.$url2);
} else {
    print "<p>Error al crear el registro.</p>\n";
}

$bd = null;


?>