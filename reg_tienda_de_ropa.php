<?php
    // Esto siempre lo va a llevar (es para usar localhost)
    $link = mysqli_connect("localhost","root","","tienda_de_ropa") or die("<h2>Error de conexión</h2>");

    $sql = "INSERT INTO ropa (clave_primaria, clave_secundaria, origen, nombre, descripcion, categoria, talla, precio, genero, marca, color, cantidad) VALUES ('$_REQUEST[clave_primaria]','$_REQUEST[clave_secundaria]','$_REQUEST[origen]','$_REQUEST[nombre]','$_REQUEST[descripcion]','$_REQUEST[categoria]','$_REQUEST[talla]','$_REQUEST[precio]','$_REQUEST[genero]','$_REQUEST[marca]', '$_REQUEST[color]', '$_REQUEST[cantidad]')";
    
    if (mysqli_query($link, $sql)) {
        echo '
            <h2>Registro completo</h2>
            <a href="moto.html">Volver</a>';
    } else {
        echo "Error de envío: " . mysqli_error($link);
    }
?>