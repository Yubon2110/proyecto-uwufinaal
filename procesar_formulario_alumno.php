<?php
// Conexión a la base de datos (ajusta tus credenciales)
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "bdlaboratorios_fca";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtiene los valores del formulario
$nombre = $_POST["nombreyapellido"];
$materia = $_POST["Materia"];
$curso = $_POST["curso"];
$cedula = $_POST["ci"];
$numeroEquipo = $_POST["numero de equipo"];
$fechaInicio = $_POST["fecha"];
$horaInicio = $_POST["hora-inicio"];
$horaFin = $_POST["hora-fin"];

// Prepara la sentencia SQL para la inserción
$sql = "INSERT INTO registros (nombre, materia, curso, cedula, numero_equipo, fecha_inicio, hora_inicio, hora_fin) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssss", $nombre, $materia, $curso, $cedula, $numeroEquipo, $fechaInicio, $horaInicio, $horaFin);

// Ejecuta la inserción en la base de datos
if ($stmt->execute()) {
    echo "Registro exitoso.";
} else {
    echo "Error al registrar los datos: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>


