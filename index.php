<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Login</title>
    <link href="css/estilos.css" rel="stylesheet"/>
</head>
<body>
    <div class="contenedor">
        <h2>Registro de Eventos</h2>
        <form id="forma" name="forma" method="post" >
            <div class="elemento">
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username" required="true"/>
            </div>
            <div class="elemento">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required="true"/>
            </div>
            <div class="elemento">
                <input type="submit" value="Enviar"/>
            </div>
        </form>
    </div>
</body>
</html>