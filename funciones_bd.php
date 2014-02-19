<?php

/* 
 * Funciones de acceso y manejo de base de datos
 */
define('BD_USUARIO', 'root');
define('BD_PASSWORD', 'abc123.');
define('BD_NOME', 'inventario');
define('BD_CONEX_PDO', 'mysql:host=localhost;dbname='.BD_NOME);
// FUNCIÓN DE CONEXIÓN CON LA BASE DE DATOS MYSQL
function conectaDb()
{
    try {
        $db = new PDO(BD_CONEX_PDO, BD_USUARIO, BD_PASSWORD);
        return($db);
    } catch (PDOException $e) {
        print "<p>Error: No puede conectarse con la base de datos.</p>\n";
        print "<p>Error: " . $e->getMessage() . "</p>\n";
        exit();
    }
}


//Función de consulta


