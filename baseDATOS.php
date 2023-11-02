<?php
$servername = "localhost";  // Nombre del servidor (en este caso, local)
$username = "root";         // Nombre de usuario de MySQL (predeterminado en XAMPP)
$password = "";             // Contraseña de MySQL (predeterminado en XAMPP)
$database = "mi_basededatos";  // Nombre de la base de datos que creaste

// Crea una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa"; // Esto es opcional, solo para verificar que la conexión funciona
}

// Cierra la conexión cuando hayas terminado
$conn->close();
?>
