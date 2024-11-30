<?php 

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'admin', 'Cr1sti4n5a.', 'bienesraices_crud');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}