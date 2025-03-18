<?php

$link = mysqli_connect("localhost","root","","celular");

$sql = "INSERT INTO celular (clave_primaria, clave_secundaria, marca, color, pantalla, año_de_fabricacion, no_microfono, no_lampara, no_bocinas, no_camaras) VALUES ('$_REQUEST[clave_primaria]','$_REQUEST[clave_secundaria]','$_REQUEST[marca]','$_REQUEST[color]','$_REQUEST[pantalla]','$_REQUEST[año_de_fabricacion]','$_REQUEST[no_microfono]','$_REQUEST[no_lampara]', '$_REQUEST[no_bocinas]','$_REQUEST[no_camaras]')";

 if(mysqli_query($link , $sql)){
    echo  '
    <h2>Registro completo</h2>
    <a href="celular.html">celular</a>';
 }

?>