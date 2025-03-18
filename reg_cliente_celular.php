<?php

$link = mysqli_connect("localhost","root","","celular");

$sql = "INSERT INTO cliente (clave_primaria, clave_secundaria, num_de_telefono, RFC, nombre, apellidos, direccion) VALUES ('$_REQUEST[clave_primaria]','$_REQUEST[clave_secundaria]','$_REQUEST[num_de_telefono]','$_REQUEST[RFC]','$_REQUEST[nombre]','$_REQUEST[apellidos]','$_REQUEST[direccion]')";

 if(mysqli_query($link , $sql)){
    echo  '
    <h2>Registro completo</h2>
    <a href="celular.html">celular</a>';
 }

?>