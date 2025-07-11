<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Técnica N° 1 de Vicente López</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="./img/logo.ico">
</head>
<body>
    <?php include 'components/navbar.php'; ?>

    <main>
        <!-- Sección Hero -->
        <section id="inicio" class="hero-section">
            <div class="hero-content">
                <h1 class="school-name">Técnica N° 1 de Vicente López</h1>
                <p class="school-subtitle" id="subtitle">
                    <span>F</span><span>o</span><span>r</span><span>m</span><span>a</span><span>n</span><span>d</span><span>o</span><span class="space">_</span><span>e</span><span>l</span><span class="space">_</span><span>f</span><span>u</span><span>t</span><span>u</span><span>r</span><span>o</span><span class="space">_</span><span>t</span><span>é</span><span>c</span><span>n</span><span>i</span><span>c</span><span>o</span><span class="space">_</span><span>d</span><span>e</span><span class="space">_</span><span>A</span><span>r</span><span>g</span><span>e</span><span>n</span><span>t</span><span>i</span><span>n</span><span>a</span>
                </p>
            </div>
            <!-- Flecha para siguiente sección -->
            <div class="scroll-arrow" id="scrollArrow">
                <i class="fas fa-chevron-down"></i>
            </div>
        </section>

        <!-- Segunda Sección Parallax -->
        <section id="autoridades" class="parallax-section">
            <div class="parallax-left">
                <h2 class="section-title">Nuestras Autoridades</h2>
                <p class="section-subtitle">Liderazgo y experiencia educativa</p>
            </div>
            <div class="parallax-right first-parallax-right">
                <div class="content-overlay">
                    <h3>Equipo Directivo</h3>
                    <p>
                        El director de la escuela es el Prof. Ezequiel Torres y los vicedirectores 
                        son Lic. Prof. Mariana Bonetti, Lic. Prof. Karin Cuervo y Prof. Daniel Segnini.
                    </p>
                    <p>
                        La Asociación Cooperadora, presente desde los inicios de la escuela, 
                        ha desempeñado un rol esencial en el desarrollo y sostenimiento de la institución.
                    </p>
                </div>
            </div>
            <!-- Flecha para siguiente sección -->
            <div class="scroll-arrow" id="scrollArrow2">
                <i class="fas fa-chevron-down"></i>
            </div>
        </section>

        <!-- Tercera Sección Parallax - Historia -->
        <section id="historia" class="parallax-section">
            <div class="parallax-left">
                <h2 class="section-title">Nuestra Historia</h2>
                <p class="section-subtitle">Desde 1984 formando técnicos</p>
            </div>
            <div class="parallax-right second-parallax-right">
                <div class="content-overlay">
                    <h3>Fundación y Crecimiento</h3>
                    <p>
                        El 16 de abril de 1984, la escuela industrial de Villa Adelina abrió sus puertas 
                        en un predio de 800 m², recibiendo a sus primeros 72 estudiantes.
                    </p>
                    <p>
                        La idea surgió de Ceferino Fernández, miembro del Club de Leones, con el apoyo 
                        del Club de Leones. El edificio fue construido sobre terrenos donados por la 
                        señora Elisa Schulze de Ader y su hija Ana Elisa Ader de Grümbaum.
                    </p>
                </div>
            </div>
            <!-- Flecha para siguiente sección -->
            <div class="scroll-arrow" id="scrollArrow3">
                <i class="fas fa-chevron-down"></i>
            </div>
        </section>

        <!-- Cuarta Sección Parallax - Actualidad -->
        <section id="actualidad" class="parallax-section">
            <div class="parallax-left">
                <h2 class="section-title">Actualidad</h2>
                <p class="section-subtitle">750 alumnos, 3 turnos, excelencia educativa</p>
            </div>
            <div class="parallax-right third-parallax-right">
                <div class="content-overlay">
                    <h3>Nuestra Institución Hoy</h3>
                    <p>
                        La Escuela de Educación Técnica N°1 "Eduardo Ader" ha crecido significativamente, 
                        alcanzando una matrícula de aproximadamente 750 alumnos distribuidos en turnos 
                        de mañana, tarde y vespertino.
                    </p>
                    <p>
                        Cuenta con catorce divisiones de ciclo básico y once de ciclo superior secundario. 
                        La institución dispone de 20 aulas en total, de las cuales 9 son para talleres 
                        y materias de laboratorio.
                    </p>
                </div>
            </div>
            <!-- Flecha para siguiente sección -->
            <div class="scroll-arrow" id="scrollArrow4">
                <i class="fas fa-chevron-down"></i>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>

    <script src="scripts/navbar.js"></script>
    <script src="scripts/main.js"></script>
</body>
</html>
