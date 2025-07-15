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
                    
                    <h3 class="tech-section-title">Tecnologías que dominarás</h3>
                    <div class="tecnologias-grid">
                        <div class="tech-item" onclick="mostrarTechModal('arduino')">
                            <i class="fas fa-microchip"></i>
                            <span>Arduino</span>
                        </div>
                        <div class="tech-item" onclick="mostrarTechModal('robotica')">
                            <i class="fas fa-robot"></i>
                            <span>Robótica</span>
                        </div>
                        <div class="tech-item" onclick="mostrarTechModal('automatizacion')">
                            <i class="fas fa-bolt"></i>
                            <span>Automatización</span>
                        </div>
                        <div class="tech-item" onclick="mostrarTechModal('raspberry')">
                            <i class="fab fa-raspberry-pi"></i>
                            <span>Raspberry Pi</span>
                        </div>
                        <div class="tech-item" onclick="mostrarTechModal('plc')">
                            <i class="fas fa-cogs"></i>
                            <span>PLC</span>
                        </div>
                        <div class="tech-item" onclick="mostrarTechModal('scada')">
                            <i class="fas fa-desktop"></i>
                            <span>SCADA</span>
                        </div>
                        <div class="tech-item" onclick="mostrarTechModal('labview')">
                            <i class="fas fa-chart-line"></i>
                            <span>LabVIEW</span>
                        </div>
                        <div class="tech-item" onclick="mostrarTechModal('pcb')">
                            <i class="fas fa-memory"></i>
                            <span>PCB Design</span>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-plus-circle"></i>
                            <span>Próximamente</span>
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
                    
                    <h3 class="tech-section-title">Tecnologías que dominarás</h3>
                    <div class="tecnologias-grid">
                        <div class="tech-item" onclick="mostrarTechModal('python')">
                            <i class="fab fa-python"></i>
                            <span>Python</span>
                        </div>
                        <div class="tech-item" onclick="mostrarTechModal('javascript')">
                            <i class="fab fa-js-square"></i>
                            <span>JavaScript</span>
                        </div>
                        <div class="tech-item" onclick="mostrarTechModal('html5')">
                            <i class="fab fa-html5"></i>
                            <span>HTML5</span>
                        </div>
                        <div class="tech-item" onclick="mostrarTechModal('php')">
                            <i class="fab fa-php"></i>
                            <span>PHP</span>
                        </div>
                        <div class="tech-item" onclick="mostrarTechModal('nodejs')">
                            <i class="fab fa-node-js"></i>
                            <span>Node.js</span>
                        </div>
                        <div class="tech-item" onclick="mostrarTechModal('java')">
                            <i class="fab fa-java"></i>
                            <span>Java</span>
                        </div>
                        <div class="tech-item" onclick="mostrarTechModal('sql')">
                            <i class="fas fa-database"></i>
                            <span>SQL</span>
                        </div>
                        <div class="tech-item" onclick="mostrarTechModal('git')">
                            <i class="fab fa-git-alt"></i>
                            <span>Git</span>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-plus-circle"></i>
                            <span>Próximamente</span>
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
                <h2 id="modal-programacion-title">PERFIL TÉCNICO <span class="modal-specialty">PROGRAMACIÓN</span></h2>
                
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
                <h2 id="modal-electronica-title">PERFIL TÉCNICO <span class="modal-specialty">ELECTRÓNICA</span></h2>
                
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
                    
                    <p class="modal-footer">
                        <strong>Campo laboral:</strong> Nuestros egresados se desempeñan en industrias 
                        como automotriz, petroquímica, alimentos, telecomunicaciones y energía, 
                        así como en consultorías especializadas y emprendimientos tecnológicos.
                    </p>
                </div>
            </div>
        </div>

        <!-- MODAL PARA TECNOLOGÍAS INDIVIDUALES -->
        <div class="contenedor-centro">
            <div id="techModal" 
                 class="card tech-modal" 
                 role="dialog" 
                 aria-labelledby="tech-modal-title" 
                 aria-modal="true">
                <button class="modal-close-btn" onclick="cerrarTechModal()" aria-label="Cerrar modal">×</button>
                <div class="tech-modal-header">
                    <i id="techModalIcon" class="tech-modal-icon"></i>
                    <h2 id="techModalTitle">Tecnología</h2>
                </div>
                <div class="modal-content">
                    <p id="techModalDescription">Descripción de la tecnología...</p>
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
