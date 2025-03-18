<?php
    // Esto siempre lo va a llevar (es para usar localhost)
    $link = mysqli_connect("localhost", "root", "", "biblioteca") or die("<h2>Error de conexión</h2>");

    $sql = "INSERT INTO alumno (clave_primaria, clave_secundaria, escuela, edad, grado, grupo, sexo, nombre, altura) VALUES ('$_REQUEST[clave_primaria]','$_REQUEST[clave_secundaria]','$_REQUEST[escuela]','$_REQUEST[edad]','$_REQUEST[grado]','$_REQUEST[grupo]','$_REQUEST[sexo]','$_REQUEST[nombre]','$_REQUEST[altura]')";

    if (mysqli_query($link, $sql)) {
        echo '
            <h2>Registro completo</h2>
            <a href="biblioteca.html">libros</a>';
    } else {
        echo "Error de envío: " . mysqli_error($link);
    }

?>