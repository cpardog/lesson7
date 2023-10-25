<?php
echo "Hola mundo";
if (isset($_POST["user"])) {
    $nombre = $_POST["user"];
    echo "$nombre" . "Eso fue lo que digitó en usuario";
}
else {
    echo "No se cumple la condicion";
}


if (isset($_POST["password"])) {
    $contra = $_POST["password"];
    echo "$contra" . "Eso fue lo que digitó en contraseña";
}
else {
    echo "No se cumple la condicion";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bienvenido a la aplicación</h1>
</body>

</html>