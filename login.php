<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="http://localhost/proyecto/login.css">
    <link rel="shortcut icon" href="images/logom-removebg-preview.png" type="image/x-icon">
</head> 

<body>
    <header>
        <nav>
            <a href="index.html"><h1>MYWA</h1></a>
        </nav>

    </header>
    <div id="contenido">
        <div class="sd">
        <form method="post">
                <h1>Acceder</h1>
                <input type="text" class="ss" name="Usuario" placeholder="Usuario">
                <input type="password" class="ss" name="Contraseña" placeholder="contraseña">
                <input type="submit" class="sn" name="acceder" value="Iniciar Sesión">
                <p>¿No registrado?&nbsp;<a href="registrari.php">Crear cuenta</a></p>
            </form>
            <?php
                include("acceder.php");
            ?>
        </div>
    </div>
    <footer>
        <p>@Taesaith_2023</p>
    </footer>
</body>

</html>