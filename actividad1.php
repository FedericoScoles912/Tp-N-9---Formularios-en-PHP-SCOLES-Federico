<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
<?php
$nombre = $_REQUEST['nombre'];
$edad = $_REQUEST['edad'];

if ($edad < 18) {
    echo $nombre . " es menor de edad.";
} else {
    echo $nombre . " es mayor de edad.";
}
?>
</body>
</html>
