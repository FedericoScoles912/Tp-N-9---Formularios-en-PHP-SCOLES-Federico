<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
<?php
$nombre = $_REQUEST['nombre'];
$deportes = isset($_REQUEST['deportes']) ? $_REQUEST['deportes'] : [];

echo "Nombre: " . $nombre . "<br>";
echo "Cantidad de deportes que practica: " . count($deportes);
?>
</body>
</html>
