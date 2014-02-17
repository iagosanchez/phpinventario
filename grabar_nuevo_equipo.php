<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validarDatosRegistro() {
     $nombre = (isset($_REQUEST['nombre']))?
            $_REQUEST['nombre']:"";
    
    $descripcion = (isset($_REQUEST['descripcion']))?
            $_REQUEST['descripcion']:"";
    
    $ip = (isset($_REQUEST['ip']))?
            $_REQUEST['ip']:"";
    
    $ram = (isset($_REQUEST['ram']))?
            $_REQUEST['ram']:"";
}

function grabarEquipo () {
    
}

//PRINCIPAL