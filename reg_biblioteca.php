<?php
    // Esto siempre lo va a llevar (es para usar localhost)
    $link = mysqli_connect("localhost", "root", "", "biblioteca") or die("<h2>Error de conexión</h2>");
if (isset($_POST['presta'])) {


    $registros=mysqli_query($link,"select contador from libro where clave_primaria='$_REQUEST[clave_primaria]'")or die("Problemas en el servidor".mysqli_error($conexion));


    if($reg=mysqli_fetch_array($registros)){
        mysqli_query($link,"delete from libro where clave_primaria='$_REQUEST[clave_primaria]'")or die("Problemas en el servidor".mysqli_error($conexion));
        echo "El libro fue dado de baja exitosamenete";
        echo '
        <a href="biblioteca.html">Volver</a>';
    }
    else{
        echo "No existe el libro";
        echo '
        <a href="biblioteca.html">Volver</a>';
    }
} else {
    if(isset($_POST['devuelve'])){

    $sql = "INSERT INTO libro (clave_primaria, clave_secundaria, num_de_hojas, autor, editorial, tipo_de_indice, color, origen, descripcion, titulo) VALUES ('$_REQUEST[clave_primaria]','$_REQUEST[clave_secundaria]','$_REQUEST[num_de_hojas]','$_REQUEST[autor]','$_REQUEST[editorial]','$_REQUEST[tipo_de_indice]','$_REQUEST[color]','$_REQUEST[origen]','$_REQUEST[descripcion]','$_REQUEST[titulo]')";

    if (mysqli_query($link, $sql)) {
        echo '
            <h2>Registro completo</h2>
            <a href="biblioteca.html">Volver</a>';
    } else {
        echo "Error de envío: " . mysqli_error($link);
    }
}
}
?>
