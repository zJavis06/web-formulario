<?php
    // Esto siempre lo va a llevar (es para usar localhost)
    $link = mysqli_connect("localhost", "root", "", "carro") or die("<h2>Error de conexión</h2>");

    $sql = "INSERT INTO autos (clave_primaria, clave_secundaria, marca, modelo, precio, color, año_de_fabricacion, estado_del_veiculo, kilometraje, no_de_puertas) VALUES ('$_REQUEST[clave_primaria]','$_REQUEST[clave_secundaria]','$_REQUEST[marca]','$_REQUEST[modelo]','$_REQUEST[precio]','$_REQUEST[color]','$_REQUEST[año_de_fabricacion]','$_REQUEST[estado_del_veiculo]','$_REQUEST[kilometraje]','$_REQUEST[no_de_puertas]')";
    
    if (mysqli_query($link, $sql)) {
        echo '
            <h2>Registro completo</h2>
            <a href="carro.html">Volver</a>';
    } else {
        echo "Error de envío: " . mysqli_error($link);
    }
?>