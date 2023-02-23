<?php

try {
    $pdo = new PDO('mysql:host=localhost; dbname=db_agiliza_ae','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "conectado!";
} catch (PDOException $e) {
    die("ERROR: Não foi possível conectar." . $e->getMessage());
}


?>