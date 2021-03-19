<?php
    $destino= "vfilosofica@.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
    $contenido = "nombre: " . $nombre . "\nCorreo:". $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
    mail($destino,"Contacto", $contenido);
    header("Location:gracias.html");
?>