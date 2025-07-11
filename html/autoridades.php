<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoridades - Técnica N° 1 de Vicente López</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/autoridades.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
    <?php include '../components/navbar-subpages.php'; ?>

    <main>

    <div class="main">

        <!--Directivos-->

        <!--plantilla-->
        <h1 class="h1-cargo">Equipo Directivo</h1>
        <div class="grid">
            <div class="autoridad" onclick="abrirModal()">
                <div class="foto-container">
                    <img src="../img/logo.webp" alt="foto del directivo">
                </div>
                <div class="info-autoridad">
                    <h2 class="nombre-autoridad">Nombre Apellido</h2>
                    <span class="cargo">Cargo</span>
                </div>
            </div>
        </div>

        <!--Secretaria-->
        <h1 class="h1-cargo">Secretaria</h1>
        

        <!--Departamentos-->
        <h1 class="h1-cargo">Jefes de departamentos</h1>
        

        <!--Preceptores-->
        <h1 class="h1-cargo">Preceptores</h1>
        

        <!--Auxiliares-->
        <h1 class="h1-cargo">Auxiliares</h1>
        

    <!-- Modal - plantilla -->
    <div id="modalDirectivo" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="cerrarModal()">&times;</span>
                <div class="modal-info-autoridad">
                    <h3 id="modalNombre" class="modal-name">Nombre Apellido</h3>
                    <p id="modalCargo" class="modal-cargo">Cargo</p>
                </div>
            </div>
            <hr>
            <div class="modal-body">
                <div class="modal-image">
                    <img id="modalImagen" src="../img/logo.webp" alt="Foto del directivo">
                </div>
                <div class="modal-info">
                    <p id="modalDescripcion" class="modal-descripcion">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod assumenda esse sint explicabo distinctio, tenetur odit ducimus totam accusamus aliquid numquam. Ullam sunt ipsum dignissimos consectetur, fuga veniam sint similique?</p>
                </div>
            </div>
        </div>
    </div>
    </main>

    <?php include '../components/footer.php'; ?>

    <script src="../scripts/navbar.js"></script>
    <script src="../scripts/autoridades.js"></script>

</body>
</html>
