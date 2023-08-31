<?php
$conexion = mysqli_connect("localhost", "root", "", "usuarios");

if($conexion){
    echo 'Conexion exitosa';
}

?>