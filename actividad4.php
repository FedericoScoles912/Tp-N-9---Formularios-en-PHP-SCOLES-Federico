<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
<?php
$nombre = $_REQUEST['nombre'];
$monto = $_REQUEST['monto'];

echo "Nombre: " . $nombre . "<br>";
if ($monto > 10000) {
    echo "Debe pagar un recargo.";
} else {
    echo "No debe pagar un recargo.";
}
?>
</body>
</html>
