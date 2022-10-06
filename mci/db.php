<?php

$servidor = "localhost";
$usuario = "root";
$password = "1212";
$bd = "validar";
$conecta = mysqli_connect($servidor, $usuario, $password,$bd);
if($conecta->connecta_error){
    die("error al conectar la base de datos de la pagina.......".$conecta->connect_error)
}
?>