<?php
session_start();

try{
    $BDD = new PDO('mysql:host=192.168.65.34;dbname=cloche; charset=utf8', 'root', 'root');
    $BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    die('Erreur : '. $e->getMessage());
}

?>