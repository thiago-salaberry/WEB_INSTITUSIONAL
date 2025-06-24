<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/directivos.css?v=1.0" />
    <title>Autoridades</title>
</head>
<body>
<?php include("../includes/navbar.php"); ?>
    <div class="container">
        <h2>Lista de Autoridades</h2>
        <?php
            $conn = new mysqli("localhost", "root", "", "web");
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Definimos una función para verificar si la imagen existe en el servidor
            function verificarImagen($ruta) {
                return file_exists($ruta) && is_file($ruta);
            }

            $sql = "SELECT nombre, img_url, cargo, descripcion FROM directivos";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Verifica si img_url está vacío o la imagen no existe y usa sinFoto.png si es el caso
                    $img_url = !empty($row['img_url']) && verificarImagen($row['img_url']) ? htmlspecialchars($row['img_url']) : '../img/Directivos/sinFoto.webp';
                    
                    echo "<div class='directivo'>";
                        echo "<div class='directivo-header'>";
                            echo "<picture class='avatar'>";
                                echo "<img src='" . $img_url . "' alt='Imagen de " . htmlspecialchars($row['nombre']) . "'>";
                            echo "</picture>";
                            echo "<h2 class='nombre'>" . htmlspecialchars($row['nombre']) .  "</h2>";
                            echo "<h2 class='info-preview'>" . htmlspecialchars($row['cargo']) .  "</h2>";
                        echo "</div>"; 
                        echo "<div class='informacion'>";
                            echo "<p>" . htmlspecialchars($row['descripcion']) . "</p>";
                        echo "</div>"; 
                    echo "</div>";
                }
            } else {
                echo "<li>No hay datos disponibles.</li>";
            }
            
            $conn->close();
        ?>    
    </div>
</body>
</html>
