<?php
$filename = "productos.csv";
header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename=$filename");
readfile($filename);
?>