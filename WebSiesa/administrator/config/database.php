<?php
$host = '190.34.179.61';
$db = 'dbsiesa';
$user = 'usr_siesa';
$pass = 'fq95#U2g';

try {

    $conexion = new PDO("mysql:host=$host;dbname=$db",$user,$pass); //Datos para conectarse a la BD

} catch (Exception $ex) {
    echo $ex -> getMessage();
}
?>

<!-- $host = '190.34.179.61';
$db = 'dbsiesa';
$user = 'usr_siesa';
$pass = 'fq95#U2g'; -->