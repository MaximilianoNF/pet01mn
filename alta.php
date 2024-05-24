<?php

require_once 'answers.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nombre'] ?? '';
    $lastname = $_POST['apellido'] ?? '';
    $email = $_POST['correo'] ?? '';
    $born = $_POST['fecha_de_nacimiento'] ?? '';
    $phone = $_POST['telefono'] ?? '';
    $genero = $_POST['genero'] ?? '';
    $country = $_POST['pais'] ?? '';

    $auto = new Auto($name, $lastname, $email, $born, $phone, $genero, $country);

    if ($auto->insertar()) {
        echo "Te has registrado";
    } else {
        echo "Error al registrarte";
    }
} else {
    echo "No se ha podido registrar";
}