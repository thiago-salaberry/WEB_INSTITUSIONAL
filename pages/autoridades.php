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
    <main>
        <div class="cont_title">
            <h1 class="titulo">Autoridades</h1>
        </div>
        <div class="cont_title">
            <h2 class="sub-titulo">
                Conoce al equipo directivo y docente que hace posible la formación técnica de calidad
            </h2>
        </div>
            
            <!-- Equipo Directivo -->
            <h1 class="h1-cargo">Equipo Directivo</h1>
            <div class="grid equipo-directivo">
                <div class="autoridad" onclick="abrirModal('Lic. María González', 'Directora General', '../img/directora.jpg', 'Licenciada en Educación con especialización en Tecnología Educativa. Cuenta con más de 15 años de experiencia en gestión educativa y ha liderado importantes proyectos de innovación tecnológica en instituciones educativas. Su visión es formar estudiantes preparados para los desafíos del siglo XXI, promoviendo la integración de las nuevas tecnologías en el proceso de enseñanza-aprendizaje. Ha implementado programas de formación docente en herramientas digitales y coordinado proyectos de infraestructura tecnológica.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto de la directora">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Lic. María González</h2>
                        <span class="cargo">Directora General</span>
                    </div>
                </div>

                <div class="autoridad" onclick="abrirModal('Prof. Carlos Rodríguez', 'Vicedirector Académico', '../img/vicedirector.jpg', 'Profesor de Matemáticas con maestría en Educación Tecnológica. Especialista en currículos técnicos y coordinador de proyectos de investigación aplicada. Ha publicado diversos trabajos sobre metodologías de enseñanza en carreras técnicas. Responsable de la planificación académica, diseño curricular y evaluación de los programas educativos. Coordina las actividades de investigación y desarrollo tecnológico dentro de la institución.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del vicedirector">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Prof. Carlos Rodríguez</h2>
                        <span class="cargo">Vicedirector Académico</span>
                    </div>
                </div>

                <div class="autoridad" onclick="abrirModal('Ing. Ana Martínez', 'Coordinadora Técnica', '../img/coordinadora.jpg', 'Ingeniera Electrónica con experiencia en la industria tecnológica. Responsable de la actualización constante de los laboratorios y equipos técnicos. Coordina las prácticas profesionales y mantiene vínculos con empresas del sector. Gestiona el mantenimiento y renovación del equipamiento técnico, coordina las pasantías estudiantiles en empresas tecnológicas y establece convenios de colaboración con el sector productivo para el desarrollo de proyectos conjuntos.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto de la coordinadora técnica">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Ing. Ana Martínez</h2>
                        <span class="cargo">Coordinadora Técnica</span>
                    </div>
                </div>
            </div>

            <!-- Secretaría -->
            <h1 class="h1-cargo">Secretaría</h1>
            <div class="grid secretaria">
                <div class="autoridad" onclick="abrirModal('Lic. Patricia López', 'Secretaria Académica', '../img/secretaria.jpg', 'Licenciada en Administración Educativa con especialización en gestión documental. Responsable de la organización académica, trámites estudiantiles y coordinación de exámenes. Atiende consultas de estudiantes y padres sobre procedimientos administrativos. Gestiona la documentación académica, coordina los exámenes finales y parciales, administra el sistema de calificaciones y mantiene actualizado el registro académico de todos los estudiantes.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto de la secretaria académica">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Lic. Patricia López</h2>
                        <span class="cargo">Secretaria Académica</span>
                    </div>
                </div>

                <div class="autoridad" onclick="abrirModal('Sr. Roberto Silva', 'Secretario Administrativo', '../img/secretario-admin.jpg', 'Técnico administrativo con amplia experiencia en gestión financiera educativa. Maneja presupuesto institucional, proveedores y recursos materiales. Coordina el mantenimiento de instalaciones y equipos. Administra el presupuesto anual, gestiona contratos con proveedores, coordina el mantenimiento edilicio y supervisa el inventario de recursos materiales y equipos de la institución.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del secretario administrativo">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Sr. Roberto Silva</h2>
                        <span class="cargo">Secretario Administrativo</span>
                    </div>
                </div>
            </div>

            <!-- Jefes de Departamentos -->
            <h1 class="h1-cargo">Jefes de Departamentos</h1>
            <div class="grid jefes-departamento">
                <div class="autoridad" onclick="abrirModal('Prof. Miguel Torres', 'Jefe Dpto. Programación', '../img/jefe-programacion.jpg', 'Profesor de Informática con especialización en desarrollo de software. Coordina el departamento de Programación y coordina proyectos de desarrollo de aplicaciones. Ha participado en concursos de programación a nivel provincial. Dirige el equipo docente del departamento, diseña el plan de estudios, coordina proyectos estudiantiles de desarrollo de software y mantiene actualizado el contenido curricular con las últimas tendencias tecnológicas.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del jefe de programación">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Prof. Miguel Torres</h2>
                        <span class="cargo">Jefe Dpto. Programación</span>
                    </div>
                </div>

                <div class="autoridad" onclick="abrirModal('Ing. Laura Fernández', 'Jefa Dpto. Electrónica', '../img/jefa-electronica.jpg', 'Ingeniera Electrónica con experiencia industrial. Responsable del laboratorio de electrónica y proyectos de automatización. Coordina prácticas en empresas del sector electrónico y mantiene actualizado el equipamiento técnico. Supervisa el funcionamiento del laboratorio de electrónica, coordina proyectos de automatización industrial y gestiona las prácticas profesionales en empresas del sector.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto de la jefa de electrónica">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Ing. Laura Fernández</h2>
                        <span class="cargo">Jefa Dpto. Electrónica</span>
                    </div>
                </div>

                <div class="autoridad" onclick="abrirModal('Prof. Daniel García', 'Jefe Dpto. Matemática', '../img/jefe-matematica.jpg', 'Profesor de Matemáticas con maestría en Matemática Aplicada. Especialista en matemática para carreras técnicas. Coordina el departamento de Matemáticas y desarrolla materiales didácticos específicos para estudiantes técnicos. Diseña programas de matemática aplicada a la tecnología, desarrolla recursos didácticos innovadores y coordina actividades de apoyo pedagógico para estudiantes con dificultades en matemáticas.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del jefe de matemática">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Prof. Daniel García</h2>
                        <span class="cargo">Jefe Dpto. Matemática</span>
                    </div>
                </div>

                <div class="autoridad" onclick="abrirModal('Prof. Silvia Ruiz', 'Jefa Dpto. Comunicación', '../img/jefa-comunicacion.jpg', 'Profesora de Lengua y Literatura con especialización en comunicación técnica. Coordina el departamento de Comunicación y desarrolla habilidades de expresión oral y escrita en estudiantes técnicos. Organiza talleres de redacción técnica. Desarrolla programas de comunicación técnica, coordina talleres de redacción de informes técnicos y proyectos de comunicación institucional.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto de la jefa de comunicación">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Prof. Silvia Ruiz</h2>
                        <span class="cargo">Jefa Dpto. Comunicación</span>
                    </div>
                </div>
            </div>

            <!-- Preceptores -->
            <h1 class="h1-cargo">Preceptores</h1>
            <div class="grid preceptores">
                <div class="autoridad" onclick="abrirModal('Prof. Javier Morales', 'Preceptor 1er Año', '../img/preceptor-1.jpg', 'Profesor con especialización en orientación estudiantil. Acompaña a los estudiantes de primer año en su adaptación a la escuela técnica. Coordina actividades de integración y brinda apoyo pedagógico personalizado. Realiza seguimiento individual del rendimiento académico, coordina actividades de bienvenida y adaptación, y brinda apoyo emocional a estudiantes que lo necesiten.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del preceptor de 1er año">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Prof. Javier Morales</h2>
                        <span class="cargo">Preceptor 1er Año</span>
                    </div>
                </div>

                <div class="autoridad" onclick="abrirModal('Prof. Carolina Vega', 'Preceptora 2do Año', '../img/preceptora-2.jpg', 'Profesora especializada en desarrollo adolescente. Trabaja con estudiantes de segundo año en su crecimiento personal y profesional. Coordina proyectos de tutoría y actividades extracurriculares. Acompaña el desarrollo personal de los estudiantes, coordina grupos de tutoría entre pares, y organiza actividades deportivas y culturales.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto de la preceptora de 2do año">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Prof. Carolina Vega</h2>
                        <span class="cargo">Preceptora 2do Año</span>
                    </div>
                </div>

                <div class="autoridad" onclick="abrirModal('Prof. Martín Soto', 'Preceptor 3er Año', '../img/preceptor-3.jpg', 'Profesor con experiencia en orientación vocacional. Acompaña a estudiantes de tercer año en la definición de su proyecto profesional. Coordina prácticas laborales y búsqueda de oportunidades de empleo. Orienta sobre opciones de formación profesional, coordina las prácticas laboralmente rentadas, y brinda asesoramiento sobre inserción laboral.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del preceptor de 3er año">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Prof. Martín Soto</h2>
                        <span class="cargo">Preceptor 3er Año</span>
                    </div>
                </div>
            </div>

            <!-- Auxiliares -->
            <h1 class="h1-cargo">Personal Auxiliar</h1>
            <div class="grid auxiliares">
                <div class="autoridad" onclick="abrirModal('Sra. Elena Castro', 'Encargada de Biblioteca', '../img/bibliotecaria.jpg', 'Técnica bibliotecaria con especialización en recursos educativos. Gestiona el centro de recursos de la institución, organiza el material bibliográfico y apoya en la investigación estudiantil. Coordina préstamos y mantenimiento de la colección. Administra el sistema de préstamos, organiza adquisiciones bibliográficas, brinda apoyo en investigación documental y mantiene actualizado el catálogo digital.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto de la bibliotecaria">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Sra. Elena Castro</h2>
                        <span class="cargo">Encargada de Biblioteca</span>
                    </div>
                </div>

                <div class="autoridad" onclick="abrirModal('Sr. Pedro Ramírez', 'Técnico de Laboratorio', '../img/tecnico-lab.jpg', 'Técnico electrónico con experiencia en mantenimiento de equipos. Responsable del funcionamiento y mantenimiento de los laboratorios técnicos. Prepara materiales y equipos para las prácticas estudiantiles. Realiza mantenimiento preventivo y correctivo de equipos electrónicos, prepara los setups para prácticas de laboratorio y brinda soporte técnico durante las clases prácticas.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del técnico de laboratorio">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Sr. Pedro Ramírez</h2>
                        <span class="cargo">Técnico de Laboratorio</span>
                    </div>
                </div>

                <div class="autoridad" onclick="abrirModal('Sra. Rosa Medina', 'Encargada de Cooperadora', '../img/cooperadora.jpg', 'Administradora con experiencia en gestión escolar. Coordina las actividades de la cooperadora escolar, gestiona recursos económicos y organiza eventos institucionales. Brinda apoyo administrativo general. Gestiona los recursos económicos de la cooperadora, organiza eventos escolares, coordina actividades recreativas y brinda apoyo administrativo en diversas actividades institucionales.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto de la cooperadora">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Sra. Rosa Medina</h2>
                        <span class="cargo">Encargada de Cooperadora</span>
                    </div>
                </div>

                <div class="autoridad" onclick="abrirModal('Sr. Jorge Luna', 'Portero Mayor', '../img/portero.jpg', 'Personal de seguridad y mantenimiento general. Responsable de la seguridad del establecimiento, control de accesos y mantenimiento básico de las instalaciones. Atiende emergencias y coordina el ingreso de visitantes. Supervisa el acceso al edificio, realiza tareas básicas de mantenimiento, coordina emergencias y brinda información general a visitantes y proveedores.')">
                    <div class="foto-container">
                        <img src="../img/logo.webp" alt="foto del portero">
                    </div>
                    <div class="info-autoridad">
                        <h2 class="nombre-autoridad">Sr. Jorge Luna</h2>
                        <span class="cargo">Portero Mayor</span>
                    </div>
                </div>
            </div>
            
    </main>

    <!-- Modal para autoridades -->
    <div id="modalDirectivo" class="modal-overlay" style="display: none;">
        <div class="modal-content">
            <button class="modal-close" onclick="cerrarModal()" aria-label="Cerrar modal">×</button>
            <div class="modal-header">
                <img id="modalImagen" src="../img/logo.webp" alt="Foto de la autoridad" class="modal-image">
                <div class="modal-info">
                    <h2 id="modalNombre" class="modal-title">Cargo</h2>
                    <p id="modalCargo" class="modal-subtitle">Nombre</p>
                </div>
            </div>
            <div class="modal-body">
                <p id="modalDescripcion" class="modal-description">Descripción de la autoridad...</p>
            </div>
        </div>
    </div>
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
    <?php include '../components/footer.php'; ?>

    <script src="../scripts/navbar.js"></script>
    <script src="../scripts/autoridades.js"></script>
</body>
</html>
