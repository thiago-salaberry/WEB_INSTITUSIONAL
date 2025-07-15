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
    <link rel="icon" href="../img/logo.ico">
</head>
<body>
    <?php include '../components/navbar-subpages.php'; ?>

    <!-- Fondo animado como el de prueba -->
    <div class="animated-background">
        <!-- Líneas onduladas que cruzan la pantalla -->
        <div class="wave-lines">
            <div class="wave-line"></div>
            <div class="wave-line"></div>
            <div class="wave-line"></div>
            <div class="wave-line"></div>
            <div class="wave-line"></div>
            <div class="wave-line"></div>
        </div>
        
        <!-- Partículas flotantes minimalistas -->
        <div class="floating-particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
    </div>

    <main>
        <div class="main">
            <!-- Equipo Directivo -->
            <h1 class="h1-cargo">Equipo Directivo</h1>
            <div class="grid equipo-directivo">
                <div class="autoridad" onclick="abrirModal('Director/a', 'Dirección General', '../img/logo.webp', 'Descripción del Director/a. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ea impedit dolorum voluptates eos necessitatibus. At consequuntur provident, dignissimos a nesciunt reiciendis magni veritatis laboriosam tenetur, unde optio? Consequuntur, voluptatum?')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del directivo">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Dirección General</h2>
                        <span class="cargo">Director/a</span>
                    </div>
                </div>
                
                <div class="autoridad" onclick="abrirModal('Vicedirector/a', 'Vicedirección', '../img/logo.webp', 'Descripción del Vicedirector/a. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ea impedit dolorum voluptates eos necessitatibus.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del vicedirectivo">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Vicedirección</h2>
                        <span class="cargo">Vicedirector/a</span>
                    </div>
                </div>
            </div>

            <!-- Secretaria -->
            <h1 class="h1-cargo">Secretaría</h1>
            <div class="grid secretaria">
                <div class="autoridad" onclick="abrirModal('Secretario/a', 'Secretaría Académica', '../img/logo.webp', 'Descripción del Secretario/a. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ea impedit dolorum voluptates eos necessitatibus.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del secretario">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Secretaría Académica</h2>
                        <span class="cargo">Secretario/a</span>
                    </div>
                </div>
            </div>

            <!-- Jefes de Departamentos -->
            <h1 class="h1-cargo">Jefes de Departamentos</h1>
            <div class="grid jefes-departamento">
                <div class="autoridad" onclick="abrirModal('Jefe Dpto. Programación', 'Departamento de Programación', '../img/logo.webp', 'Descripción del Jefe del Departamento de Programación. Lorem ipsum dolor sit amet consectetur adipisicing elit.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del jefe de programación">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Departamento de Programación</h2>
                        <span class="cargo">Jefe Dpto. Programación</span>
                    </div>
                </div>
                
                <div class="autoridad" onclick="abrirModal('Jefe Dpto. Electrónica', 'Departamento de Electrónica', '../img/logo.webp', 'Descripción del Jefe del Departamento de Electrónica. Lorem ipsum dolor sit amet consectetur adipisicing elit.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del jefe de electrónica">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Departamento de Electrónica</h2>
                        <span class="cargo">Jefe Dpto. Electrónica</span>
                    </div>
                </div>
                
                <div class="autoridad" onclick="abrirModal('Jefe Dpto. Matemática', 'Departamento de Matemática', '../img/logo.webp', 'Descripción del Jefe del Departamento de Matemática. Lorem ipsum dolor sit amet consectetur adipisicing elit.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del jefe de matemática">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Departamento de Matemática</h2>
                        <span class="cargo">Jefe Dpto. Matemática</span>
                    </div>
                </div>
            </div>

            <!-- Preceptores -->
            <h1 class="h1-cargo">Preceptores</h1>
            <div class="grid preceptores">
                <div class="autoridad" onclick="abrirModal('Preceptor 1er Año', 'Preceptoría 1er Año', '../img/logo.webp', 'Descripción del Preceptor de 1er Año. Lorem ipsum dolor sit amet consectetur adipisicing elit.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del preceptor">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Preceptoría 1er Año</h2>
                        <span class="cargo">Preceptor 1er Año</span>
                    </div>
                </div>
                
                <div class="autoridad" onclick="abrirModal('Preceptor 2do Año', 'Preceptoría 2do Año', '../img/logo.webp', 'Descripción del Preceptor de 2do Año. Lorem ipsum dolor sit amet consectetur adipisicing elit.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del preceptor">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Preceptoría 2do Año</h2>
                        <span class="cargo">Preceptor 2do Año</span>
                    </div>
                </div>
            </div>

            <!-- Auxiliares -->
            <h1 class="h1-cargo">Personal Auxiliar</h1>
            <div class="grid auxiliares">
                <div class="autoridad" onclick="abrirModal('Personal de Limpieza', 'Servicios Generales', '../img/logo.webp', 'Descripción del Personal de Limpieza. Lorem ipsum dolor sit amet consectetur adipisicing elit.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del personal">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Servicios Generales</h2>
                        <span class="cargo">Personal de Limpieza</span>
                    </div>
                </div>
                
                <div class="autoridad" onclick="abrirModal('Portero', 'Seguridad y Acceso', '../img/logo.webp', 'Descripción del Portero. Lorem ipsum dolor sit amet consectetur adipisicing elit.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del portero">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Seguridad y Acceso</h2>
                        <span class="cargo">Portero</span>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div id="modalDirectivo" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" onclick="cerrarModal()">&times;</button>
                        <div class="modal-info-autoridad">
                            <h3 id="modalNombre" class="modal-name">Nombre Autoridad</h3>
                            <p id="modalCargo" class="modal-cargo">Cargo</p>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-image">
                            <img id="modalImagen" src="../img/logo.webp" alt="Foto de la autoridad">
                        </div>
                        <div class="modal-info">
                            <p id="modalDescripcion" class="modal-descripcion">Descripción de la autoridad...</p>
                        </div>
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
