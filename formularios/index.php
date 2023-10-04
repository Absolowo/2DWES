<html>
<body>
<h2>Formulario:</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        Nombre:
        <input type="text" name="nombre"><br>
        Contraseña:
        <input type="password" name="password"><br>
        Género:
        <select name="genero">
            <option value="hombre"selected="selected">Hombre</option>
            <option value="mujer">Mujer</option>
            <option value="otro">Otro</option>
        </select> <br>
        Imagen:
        <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
        <input type="file" name="imagen" />
        Botón de enviar:
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>
<?php
    function filtrado($datos){
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }
    if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["nombre"])){
            $errores[] = "El nombre es requerido";
        }
        if(empty($_POST["password"]) || strlen($_POST["password"]) < 5){
            $errores[] = "La contraseña es requerida y ha de ser mayor a 5 caracteres";
        }
        if(empty($errores)) {
            $nombre = filtrado($_POST["nombre"]);
            $password = filtrado($_POST["password"]);
            $genero = filtrado($_POST["genero"]);
        }
    }
    $directorioSubida = "imagenes/";
    $max_file_size = "51200";
    $extensionesValidas = array("jpg", "png", "gif");
    if(isset($_POST["submit"]) && isset($_FILES['imagen'])){
        $errores = array();
        $nombreArchivo = $_FILES['imagen']['name'];
        $filesize = $_FILES['imagen']['size'];
        $directorioTemp = $_FILES['imagen']['tmp_name'];
        $tipoArchivo = $_FILES['imagen']['type'];
        $arrayArchivo = pathinfo($nombreArchivo);
        $extension = $arrayArchivo['extension'];
        if(!in_array($extension, $extensionesValidas)){
            $errores[] = "La extensión del archivo no es válida o no se ha subido ningún archivo";
        }
        if($filesize > $max_file_size){
            $errores[] = "La imagen debe de tener un tamaño inferior a 50 kb";
        }
        $nombreArchivo = $arrayArchivo['filename'];
        $nombreArchivo = preg_replace("/[^A-Z0-9._-]/i", "_", $nombreArchivo);
        $nombreArchivo = $nombreArchivo . rand(1, 100);
        if(empty($errores)){
            $nombreCompleto = $directorioSubida.$nombreArchivo.".".$extension;
            move_uploaded_file($directorioTemp, $nombreCompleto);
            print "El archivo se ha subido correctamente";
        }
    }
?>
<ul>
<?php if(isset($errores)){
    foreach ($errores as $error){
        echo "<li> $error </li>";
    }
}
?>
</ul>