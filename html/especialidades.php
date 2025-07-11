<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Conoce las especialidades técnicas de la Escuela Técnica N° 1 de Vicente López: Programación y Electrónica. Formación profesional de calidad." />
    <meta name="keywords" content="técnica, programación, electrónica, vicente lópez, educación técnica, especialidades" />
    <meta name="author" content="Escuela Técnica N° 1 de Vicente López" />
    <meta property="og:title" content="Especialidades Técnicas - Técnica N° 1 de Vicente López" />
    <meta property="og:description" content="Formación profesional de calidad en Programación y Electrónica" />
    <meta property="og:type" content="website" />
    <title>Especialidades - Técnica N° 1 de Vicente López</title>
    
    <!-- Preload critical resources -->
    <link rel="preload" href="../css/navbar.css" as="style" />
    <link rel="preload" href="../css/especialidades.css" as="style" />
    <link rel="preload" href="../img/logo.webp" as="image" />
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/especialidades.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../img/logo.ico" />
</head>

<body>
    <!-- FONDO ANIMADO -->
    <div class="animated-background">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <?php include '../components/navbar-subpages.php'; ?>

    <!-- CONTENIDO PRINCIPAL -->
    <main style="margin-top: 100px;" role="main">
        <section class="titulos" aria-labelledby="main-title">
            <div class="cont_title">
                <h1 id="main-title" class="titulo">Especialidades Técnicas</h1>
            </div>
            <div class="cont_title">
                <h2 class="sub-titulo">
                    Formación profesional de calidad en las áreas tecnológicas más demandadas 
                    del mercado laboral actual
                </h2>
            </div>
        </section>

        <section class="cont_esp" aria-label="Especialidades disponibles">
            <!-- PROGRAMACIÓN -->
            <article class="cont_especialidades" aria-labelledby="programacion-title">
                <header class="orden">
                    <div class="cuadrito" aria-hidden="true">
                        <i class="bi bi-braces"></i>
                    </div>
                    <div>
                        <h2 id="programacion-title" class="titulo_esp">Programación</h2>
                        <p class="acompaña">Desarrollo de software y aplicaciones</p>
                    </div>
                </header>
                <hr class="linea-divisoria" aria-hidden="true" />

                <div>
                    <p class="texto">
                        Formamos desarrolladores de software con sólidos conocimientos en algoritmia, 
                        estructuras de datos y metodologías de desarrollo ágil, preparados para enfrentar 
                        los desafíos tecnológicos actuales y futuros del mercado laboral.
                    </p>
                    <img id="ejemplo" 
                         src="../img/ejemplo.png" 
                         alt="Ejemplo de código de programación mostrando sintaxis y estructura" 
                         loading="lazy" />
                    
                    <div class="tecnologias-grid">
                        <div class="tech-item">
                            <i class="fab fa-python"></i>
                            <span>Python</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-js-square"></i>
                            <span>JavaScript</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-html5"></i>
                            <span>HTML5</span>
                        </div>
                    </div>

                    <div class="cont_icon">
                        <button class="activar" aria-label="Descargar diseño curricular de Programación">
                            <i class="fas fa-download"></i> Diseño Curricular
                        </button>
                        <button onclick="mostrarCuadro()" 
                                class="activar" 
                                aria-label="Ver perfil técnico de Programación">
                            <i class="fas fa-user-graduate"></i> Perfil Técnico
                        </button>
                    </div>
                </div>
            </article>

            <!-- ELECTRÓNICA -->
            <article class="cont_especialidades" aria-labelledby="electronica-title">
                <header class="orden">
                    <div class="cuadrito" aria-hidden="true">
                        <i class="bi bi-cpu"></i>
                    </div>
                    <div>
                        <h2 id="electronica-title" class="titulo_esp">Electrónica</h2>
                        <p class="acompaña">Sistemas electrónicos y automatización</p>
                    </div>
                </header>
                <hr class="linea-divisoria" aria-hidden="true" />

                <div>
                    <p class="texto">
                        Capacitamos técnicos especialistas en sistemas electrónicos, automatización 
                        industrial y domótica, con énfasis en el diseño, implementación y mantenimiento 
                        de circuitos y sistemas embebidos de última generación.
                    </p>
                    <img class="ejemplo2" 
                         src="../img/ejemplo2.png" 
                         alt="Ejemplo de circuito electrónico con componentes y conexiones" 
                         loading="lazy" />
                    
                    <div class="tecnologias-grid">
                        <div class="tech-item">
                            <i class="fas fa-microchip"></i>
                            <span>Arduino</span>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-robot"></i>
                            <span>Robótica</span>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-bolt"></i>
                            <span>Automatización</span>
                        </div>
                    </div>

                    <div class="cont_icon">
                        <button class="activar" aria-label="Descargar diseño curricular de Electrónica">
                            <i class="fas fa-download"></i> Diseño Curricular
                        </button>
                        <button onclick="mostrarCuadro2()" 
                                class="activar" 
                                aria-label="Ver perfil técnico de Electrónica">
                            <i class="fas fa-user-graduate"></i> Perfil Técnico
                        </button>
                    </div>
                </div>
            </article>
        </section>

        <!-- FONDOS Y CUADROS MODALES -->
        <div id="fondoOscuro" 
             class="fondo-oscuro" 
             onclick="cerrarCuadro()" 
             role="button" 
             aria-label="Cerrar modal" 
             tabindex="0"></div>

        <!-- Modal Programación -->
        <div class="contenedor-centro">
            <div id="cuadro" 
                 class="card" 
                 role="dialog" 
                 aria-labelledby="modal-programacion-title" 
                 aria-modal="true">
                <button class="modal-close-btn" onclick="cerrarCuadro()" aria-label="Cerrar modal">×</button>
                <h2 id="modal-programacion-title">PERFIL TÉCNICO PROGRAMACIÓN</h2>
                
                <div class="modal-content">
                    <h3>Competencias Profesionales:</h3>
                    <ul>
                        <li>Desarrollar aplicaciones web responsivas utilizando tecnologías modernas</li>
                        <li>Crear sistemas de bases de datos relacionales</li>
                        <li>Aplicar metodologías ágiles de desarrollo</li>
                        <li>Realizar testing y control de versiones</li>
                        <li>Trabajar con APIs REST</li>
                        <li>Implementar medidas de ciberseguridad en aplicaciones</li>
                    </ul>
                    
                    <h3>Tecnologías que dominarás:</h3>
                    <div class="tech-tags">
                        <span class="tech-tag">Python</span>
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">Node.js</span>
                        <span class="tech-tag">Java</span>
                        <span class="tech-tag">SQL</span>
                        <span class="tech-tag">Git</span>
                    </div>
                    
                    <p class="modal-footer">
                        <strong>Campo laboral:</strong> Nuestros egresados trabajan como desarrolladores 
                        full-stack y analistas de sistemas en empresas líderes del sector.
                    </p>
                </div>
            </div>
        </div>

        <!-- Modal Electrónica -->
        <div class="contenedor-centro">
            <div id="cuadro2" 
                 class="card2" 
                 role="dialog" 
                 aria-labelledby="modal-electronica-title" 
                 aria-modal="true">
                <button class="modal-close-btn" onclick="cerrarCuadro()" aria-label="Cerrar modal">×</button>
                <h2 id="modal-electronica-title">PERFIL TÉCNICO ELECTRÓNICA</h2>
                
                <div class="modal-content">
                    <h3>Competencias Profesionales:</h3>
                    <ul>
                        <li>Diseñar e implementar sistemas de automatización industrial</li>
                        <li>Desarrollar proyectos IoT (Internet de las Cosas)</li>
                        <li>Realizar mantenimiento predictivo con tecnología 4.0</li>
                        <li>Programar microcontroladores y sistemas embebidos</li>
                        <li>Implementar sistemas de control y monitoreo remoto</li>
                        <li>Desarrollar soluciones de domótica y edificios inteligentes</li>
                        <li>Aplicar energías renovables y eficiencia energética</li>
                    </ul>
                    
                    <h3>Tecnologías que dominarás:</h3>
                    <div class="tech-tags">
                        <span class="tech-tag">Arduino</span>
                        <span class="tech-tag">Raspberry Pi</span>
                        <span class="tech-tag">PLC</span>
                        <span class="tech-tag">SCADA</span>
                        <span class="tech-tag">LabVIEW</span>
                        <span class="tech-tag">CAD Electrónico</span>
                        <span class="tech-tag">PCB Design</span>
                        <span class="tech-tag">Robótica</span>
                    </div>
                    
                    <p class="modal-footer">
                        <strong>Campo laboral:</strong> Nuestros egresados se desempeñan en industrias 
                        como automotriz, petroquímica, alimentos, telecomunicaciones y energía, 
                        así como en consultorías especializadas y emprendimientos tecnológicos.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <?php include '../components/footer.php'; ?>

    <!-- SCRIPTS -->
    <script src="../scripts/navbar.js"></script>
    <script src="../scripts/especialidades.js"></script>
</body>

</html>
