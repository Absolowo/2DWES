<?php
header("Content-type: image/png");
$imagen = $_GET["imagen"] ?? '';
$letMeIn = $_GET["letMeIn"] ?? '';
$carpeta = "/home/alumno/Escritorio/Imagenes";
if ($letMeIn == 1){
    if (file_exists($carpeta."/".$imagen)){
        imagepng(imagecreatefrompng($carpeta."/".$imagen));
    }
    else{
        http_response_code(404);
        imagepng(imagecreatefrompng($carpeta."/negative.png"));
    }
}
else{
    http_response_code(401);
    imagepng(imagecreatefrompng($carpeta."/negative.png"));
}
?>