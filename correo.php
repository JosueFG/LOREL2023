<?php

    $destinatario = 'josueflores13199@gmail.com';
    $destinatario = 'josuecode27@gmail.com';

    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $email = $_POST['email'];
    $mensaje = $_POST['msg'];


    $header = "Enviado desde la pagina de Cintas y etiquetas LOREL";
    $mensajeCompleto = $mensaje . "\nAtentamente: ". $nombre ;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script> alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>