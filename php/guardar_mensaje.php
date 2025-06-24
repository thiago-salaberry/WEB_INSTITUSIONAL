<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falló la conexión: " . $conn->connect_error);
}

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$mail = isset($_POST['mail']) ? $_POST['mail'] : '';
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';


$sql = "INSERT INTO mail (nombre, mail, mensaje)
VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sss", $nombre, $mail, $mensaje);
$result = $stmt->execute();

if ($result) {
    echo "<script>alert('Datos insertados con éxito');</script>";
} else {
    echo "<script>alert('Error al insertar datos');</script>";
}

header('Location: contacto.php');
$conn->close();
?>
