<?php
ob_start();

// Capturar datos del formulario
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$comentario = isset($_POST['comentario']) ? $_POST['comentario'] : '';

// Número de destino (TU WHATSAPP)
$numeroEmpresa = "34641712180"; // CAMBIAR POR TU NÚMERO CON PREFIJO INTERNACIONAL

// Preparar mensaje para WhatsApp (formato URL)
$mensaje = "Nuevo contacto desde la web:%0A";
$mensaje .= "Nombre: $nombre%0A";
$mensaje .= "Teléfono: $telefono%0A";
$mensaje .= "Email: $email%0A";
$mensaje .= "Comentario: $comentario";

// Redirigir automáticamente a WhatsApp
header("Location: https://api.whatsapp.com/send?phone=$numeroEmpresa&text=$mensaje");
exit;

ob_end_flush();
?>


