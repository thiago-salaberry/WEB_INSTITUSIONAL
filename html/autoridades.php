<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT id_dir, img_url, nombre, cargo, descripcion FROM directivos";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
    $todos_directivos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $directivos = [];
    $secretarios = [];
    $jefes = [];
    $preceptores = [];
    $auxiliares = [];
    
    $nombres_directivos = ["Ezequiel Torres", "Daniel Segnini", "Mariana Bonetti", "Karin Cuervo"];
    $nombres_secretarios = ["Cristina Goméz", "Alejandra Basack"];
    $nombres_jefes = ["Esteban Lemos", "Alejandro Hsia", "Nora Cavia", "Nancy Dunjo", "Matias Gutierrez", "Diana Cozzani", "Veronica Victorello", "Martín Lopez"];
    $nombres_preceptores = [];
    $nombres_auxiliares = [];

    foreach ($todos_directivos as $directivo) {
        if (in_array($directivo['nombre'], $nombres_directivos)) {
            $directivos[] = $directivo;
        } elseif (in_array($directivo['nombre'], $nombres_secretarios)) {
            $secretarios[] = $directivo;
        } elseif (in_array($directivo['nombre'], $nombres_jefes)) {
            $jefes[] = $directivo;
        } elseif (in_array($directivo['nombre'], $nombres_preceptores)) {
            $preceptores[] = $directivo;
        } elseif (in_array($directivo['nombre'], $nombres_auxiliares)) {
            $auxiliares[] = $directivo;
        }
    }
    
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    $directivos = [];
    $secretarios = [];
    $jefes = [];
    $preceptores = [];
    $auxiliares = [];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoridades - Técnica N° 1 de Vicente López</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/autoridades.css">
</head>
<body>
    <header class="navbar">
        <div class="navbar-container">
            <!-- Logo con dropdown de redes sociales -->
            <div class="logo-container">
                <img src="../img/logo.webp" alt="Logo Técnica N°1" class="logo" id="logoBtn">
                <div class="social-dropdown" id="socialDropdown">
                    <a href="#" class="social-link">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook</span>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-instagram"></i>
                        <span>Instagram</span>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-twitter"></i>
                        <span>Twitter</span>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-youtube"></i>
                        <span>YouTube</span>
                    </a>
                </div>
            </div>

            <!-- Menú principal -->
            <nav class="main-menu">
                <a href="../index.html" class="menu-btn" data-section="inicio">
                    <span>Inicio</span>
                </a>
                <a href="autoridades.html" class="menu-btn" data-section="autoridades">
                    <span>Autoridades</span>
                </a>
                <a href="especialidades.html" class="menu-btn" data-section="especialidades">
                    <span>Especialidades</span>
                </a>
                <a href="inscripciones.html" class="menu-btn inscripciones-btn" data-section="inscripciones">
                    <span>Inscripciones 2026</span>
                </a>
            </nav>
        </div>
    </header>

    <main>

    <div class="main">

        <!--Directivos-->
        <h1 class="h1-cargo">Equipo Directivo</h1>
        <div class="grid">

        <?php foreach($directivos as $directivo): ?>

            <div class="autoridad" onclick="abrirModal('<?php echo htmlspecialchars($directivo['img_url']); ?>', '<?php echo htmlspecialchars($directivo['nombre']); ?>', '<?php echo htmlspecialchars($directivo['cargo']); ?>', '<?php echo htmlspecialchars($directivo['descripcion']); ?>')">
                <div class="foto-container">
                    <img src="<?php echo htmlspecialchars($directivo['img_url']); ?>" alt="foto del directivo">
                </div>
                <div class="info-autoridad">
                    <h2 class="nombre-autoridad"><?php echo htmlspecialchars($directivo['nombre']); ?></h2>
                    <span class="cargo"><?php echo htmlspecialchars($directivo['cargo']); ?></span>
                </div>
            </div>

        <?php endforeach; ?>
        </div>

        <!--Secretaria-->
        <h1 class="h1-cargo">Secretaria</h1>
        <div class="grid">

        <?php foreach($secretarios as $secretario): ?>

            <div class="autoridad" onclick="abrirModal('<?php echo htmlspecialchars($directivo['img_url']); ?>', '<?php echo htmlspecialchars($secretario['nombre']); ?>', '<?php echo htmlspecialchars($secretario['cargo']); ?>', '<?php echo htmlspecialchars($secretario['descripcion']); ?>')">
                <div class="foto-container">
                    <img src="<?php echo htmlspecialchars($secretario['img_url']); ?>" alt="foto del directivo">
                </div>
                <div class="info-autoridad">
                    <h2 class="nombre-autoridad"><?php echo htmlspecialchars($secretario['nombre']); ?></h2>
                    <span class="cargo"><?php echo htmlspecialchars($secretario['cargo']); ?></span>
                </div>
            </div>

        <?php endforeach; ?>
        </div>

        <!--Departamentos-->
        <h1 class="h1-cargo">Jefes de departamentos</h1>
        <div class="grid">

        <?php foreach($jefes as $jefe): ?>

            <div class="autoridad" onclick="abrirModal('<?php echo htmlspecialchars($jefe['img_url']); ?>', '<?php echo htmlspecialchars($jefe['nombre']); ?>', '<?php echo htmlspecialchars($jefe['cargo']); ?>', '<?php echo htmlspecialchars($jefe['descripcion']); ?>')">
                <div class="foto-container">
                    <img src="<?php echo htmlspecialchars($jefe['img_url']); ?>" alt="foto del directivo">
                </div>
                <div class="info-autoridad">
                    <h2 class="nombre-autoridad"><?php echo htmlspecialchars($jefe['nombre']); ?></h2>
                    <span class="cargo"><?php echo htmlspecialchars($jefe['cargo']); ?></span>
                </div>
            </div>

        <?php endforeach; ?>
        </div>

        <!--Preceptores-->
        <h1 class="h1-cargo">Preceptores</h1>
        <div class="grid">

        <?php foreach($preceptores as $preceptor): ?>

            <div class="autoridad" onclick="abrirModal('<?php echo htmlspecialchars($preceptor['img_url']); ?>', '<?php echo htmlspecialchars($preceptor['nombre']); ?>', '<?php echo htmlspecialchars($preceptor['cargo']); ?>', '<?php echo htmlspecialchars($preceptor['descripcion']); ?>')">
                <div class="foto-container">
                    <img src="<?php echo htmlspecialchars($preceptor['img_url']); ?>" alt="foto del directivo">
                </div>
                <div class="info-autoridad">
                    <h2 class="nombre-autoridad"><?php echo htmlspecialchars($preceptor['nombre']); ?></h2>
                    <span class="cargo"><?php echo htmlspecialchars($preceptor['cargo']); ?></span>
                </div>
            </div>

        <?php endforeach; ?>
        </div>

        <!--Auxiliares-->
        <h1 class="h1-cargo">Auxiliares</h1>
        <div class="grid">

        <?php foreach($auxiliares as $auxiliar): ?>

            <div class="autoridad" onclick="abrirModal('<?php echo htmlspecialchars($auxiliar['img_url']); ?>', '<?php echo htmlspecialchars($auxiliar['nombre']); ?>', '<?php echo htmlspecialchars($auxiliar['cargo']); ?>', '<?php echo htmlspecialchars($auxiliar['descripcion']); ?>')">
                <div class="foto-container">
                    <img src="../img/actualidad.webp" alt="foto del directivo">
                </div>
                <div class="info-autoridad">
                    <h2 class="nombre-autoridad"><?php echo htmlspecialchars($auxiliar['nombre']); ?></h2>
                    <span class="cargo"><?php echo htmlspecialchars($auxiliar['cargo']); ?></span>
                </div>
            </div>
            
        <?php endforeach; ?>
        </div>

    </div>

    <!-- Modal -->
    <div id="modalDirectivo" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="cerrarModal()">&times;</span>
                <div class="modal-info-autoridad">
                    <h3 id="modalNombre" class="modal-name"></h3>
                    <p id="modalCargo" class="modal-cargo"></p>
                </div>
            </div>
            <hr>
            <div class="modal-body">
                <div class="modal-image">
                    <img id="modalImagen" src="" alt="Foto del directivo">
                </div>
                <div class="modal-info">
                    <p id="modalDescripcion" class="modal-descripcion"></p>
                </div>
            </div>
        </div>
    </div>

    </main>

    <script src="../scripts/navbar.js"></script>
    <script src="../scripts/autoridades.js">
    </script>

</body>
</html>