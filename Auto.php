<?php

require_once 'Conexion.php';

class Persona
{
    //Promocion de propiedades del constructor
    public function __construct(
        public string $name,
        public string $lastname,
        public string $email,
        public string $born,
        public string $phone,
        public string $phone,
        public string $phone,
    ) {
    }

    public function insertar(): bool
    {
        $pdo = Conexion::getPDOConnection();
        $sql = "INSERT INTO LanzamientosModelos (Marca, Modelo, Fecha_Compra) VALUES (:marca, :modelo, :fechaCompra)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':marca', $this->marca, PDO::PARAM_STR);
        $stmt->bindParam(':modelo', $this->modelo, PDO::PARAM_STR);
        $stmt->bindParam(':fechaCompra', $this->fechaCompra, PDO::PARAM_STR);

        return $stmt->execute();
    }
}