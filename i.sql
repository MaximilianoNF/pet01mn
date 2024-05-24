$sql = "INSERT INTO personas 
(Nombre, Apellido, Correo, FechaNacimiento, 
Telefono, Genero, Pais) 
VALUES 
(:nom,:ap,:correo,:fecha,:telefono,:genero,:pais)";