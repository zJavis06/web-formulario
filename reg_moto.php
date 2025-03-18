<?php
    // Esto siempre lo va a llevar (es para usar localhost)
    $link = mysqli_connect("localhost","root","","moto") or die("<h2>Error de conexión</h2>");

    $sql = "INSERT INTO moto (clave_primaria, clave_secundaria, marca, modelo, precio, color, año_de_fabricacion, kilometraje, condiciones_del_veiculo) VALUES ('$_REQUEST[clave_primaria]','$_REQUEST[clave_secundaria]','$_REQUEST[marca]','$_REQUEST[modelo]','$_REQUEST[precio]','$_REQUEST[color]','$_REQUEST[año_de_fabricacion]','$_REQUEST[kilometraje]','$_REQUEST[condiciones_del_veiculo]')";
    
    if (mysqli_query($link, $sql)) {
        echo '
            <h2>Registro completo</h2>
            <a href="moto.html">Volver</a>';
    } else {
        echo "Error de envío: " . mysqli_error($link);
    }
?>