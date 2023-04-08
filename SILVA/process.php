<?php
    // conexion a la base de datos y el servidor
    $link = mysqli_connect("localhost", "root", "") or die("<h2>No se encuentra el servidor</h2>");
    $db = mysqli_select_db($link, "SILVA") or die("<h2>Error de Conexion</h2>");

    // if ($link || $db):
    //     echo "<h3>Bien, estas conectado</h3>";
    // else:
    //     echo "<h3>Uff! para algo salió mal</h3>";
    // endif;

    // obtenemos los valores de la tabla
    $nombre = $_POST['nombre'];
    $apellidop = $_POST['apellidop'];
    $apellidom = $_POST['apellidom'];

    // obtiene la longitud de un string
    // para probarlo tenemos que desactivar la validacion por el lado frontend
    $req = (strlen($nombre) * strlen($apellidop) * strlen($apellidom)) or die("No se han llenado todos los campos");

    // ingresamos la informacion a la base de datos
    $sql ="INSERT INTO datos(nombre, apellidop, apellidom) VALUES('$nombre','$apellidop', '$apellidom'); ";
    mysqli_query($link, $sql) or die("<h2>Error al guardar los datos</h2>");
?>

<!-- volvemos a la pagina inicial -->
<a href="./">Volver atras...</a>