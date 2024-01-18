<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="registrar.css">
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
            <h1>Registrar</h1>
            <input type="text" class="ss" name="Usuario" placeholder="Usuario">
            <input type="email" class="ss" name="Email" placeholder="Correo electronico">
            <input type="password" class="ss" name="Contraseña" placeholder="Contraseña">
            <input type="submit" class="sn" name="register" value="Registrar">
    </form>
    <?php
    include("registrar.php");
    ?>
        </div>
    </div>
    <footer>
        <p>@Taesaith_2023</p>
    </footer>
</body>

</html>