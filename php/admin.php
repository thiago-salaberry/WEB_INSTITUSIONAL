<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Admin</title>
</head>
<body>
<?php

$conn = new mysqli("localhost", "root", "", "web");


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$sql = "SELECT nombre, mail, mensaje FROM mail";
$result = $conn->query($sql);


echo "<div class='container'>";
echo "<h2>Datos de la tabla mail</h2>";
echo "<ul class='mail-list'>";
if ($result->num_rows > 0) {
   
    while ($row = $result->fetch_assoc()) {
        echo "<li class='mail-item'>";
        echo "<strong>Nombre:</strong> " . htmlspecialchars($row['nombre']) . "<br>";
        echo "<strong>Correo:</strong> " . htmlspecialchars($row['mail']) . "<br>";
        echo "<strong>Mensaje:</strong> " . htmlspecialchars($row['mensaje']) . "<br>";
        echo "</li>";
    }
} else {
    echo "<li>No hay datos disponibles.</li>";
}
echo "</ul>";
echo "</div>";


$conn->close();
?>
</body>
</html>



