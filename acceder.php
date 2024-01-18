<?php
include("con_db.php");
if(!empty($_POST["acceder"])) {
    if (empty($_POST["Usuario"]) and empty($_POST["Contraseña"])) {
        echo '<h4 class="falta">FALTAN DATOS</h4>';
    } else {
        $Usuario=$_POST["Usuario"];
        $Contraseña=$_POST["Contraseña"];
        $sql=$conex->query("select * from usuarios where Usuario='$Usuario' and Contraseña='$Contraseña'");
        if ($datos=$sql->fetch_object()) {
            header("location:mywa.html");
        } else {
            echo '<h4 class="denegado">ACCESO DENEGADO</h4>';

        }
    }
}

?>