<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripciones - Técnica N° 1 de Vicente López</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="../img/logo.ico">
    <link rel="stylesheet" href="../css/inscripciones.css">
</head>
<body>

    <?php include '../components/navbar-subpages.php'; ?>
    
    <div class="main-insc-area">
        <div class="cont_title">
            <h1 class="titulo">Inscripciones 2026</h1>
        </div>
        <div class="cont_title">
            <h2 class="sub-titulo">
                Formación profesional de calidad en las áreas tecnológicas más demandadas del mercado laboral actual
            </h2>
        </div>
        <div class="insc-panel">
            <nav class="slide-nav">
                <button class="slide-btn active"><i class="fa-solid fa-lightbulb"></i>¿Por qué inscribirse?</button>
                <button class="slide-btn"><i class="fa-solid fa-clipboard-list"></i>¿Qué traer?</button>
                <button class="slide-btn"><i class="fa-solid fa-book"></i>Materias C.B.</button>
                <button class="slide-btn"><i class="fa-regular fa-calendar-check"></i>¿Cuándo abren?</button>
            </nav>
            <section id="slide_why" class="slide-section active">
                <h2><i class="fa-solid fa-lightbulb"></i>Inscripciones 2026</h2>
                <p>¿Te gusta resolver problemas y crear soluciones innovadoras? En nuestra escuela, contamos con los recursos necesarios para que puedas expresar tu creatividad. Tendrás acceso a computadoras, netbooks y herramientas de trabajo. Desde el primer día, estarás trabajando en proyectos, desde la creación de un horno solar, un semáforo con leds y de forma más avanzada la producción de circuitos electrónicos simples hasta aplicaciones web complejas. Esta experiencia te permitirá desarrollar habilidades clave como el pensamiento crítico, la resolución de problemas y el trabajo en equipo, preparándote para los desafíos del mundo profesional.</p>
            </section>
            <section id="slide_things" class="slide-section">
                <h2><i class="fa-solid fa-clipboard-list"></i>¿Qué traer?</h2>
                <ul class="requirements-list">
                    <li>Constancia de 6to grado aprobado (que diga sin adeudar materias).</li>
                    <li>Fotocopia de partida de nacimiento y de las vacunas aplicadas al alumno.</li>
                    <li>Original y fotocopias del D.N.I. del alumno y de cada uno de los padres.</li>
                    <li>Fotocopias del D.N.I. de personas autorizadas a retirar al alumno.</li>
                    <li>2 fotos 4x4.</li>
                    <li>Solicitud de inscripción con información de salud y Autorización de uso de imagen y personas autorizadas a retirar.</li>
                    <li>1 Legajo. Se compra en la escuela, lo vende cooperadora en la fecha de inscripción.</li>
                </ul>
            </section>
            <section id="slide_subjects" class="slide-section">
                <h2><i class="fa-solid fa-book"></i>Materias ciclo básico</h2>
                <div class="subjects-buttons-container">
                    <button class="button_subjects active" data-grade="1">Primer año</button>
                    <button class="button_subjects" data-grade="2">Segundo año</button>
                    <button class="button_subjects" data-grade="3">Tercer año</button>
                </div>
                <div class="grade_subjects">
                    <ul class="subjects-list" id="subjects_1">
                        <li>Lenguajes Tecnológicos</li>
                        <li>Procedimientos Técnicos</li>
                        <li>Sistemas Tecnológicos</li>
                        <li>Ciencias Naturales</li>
                        <li>Ciencias Sociales</li>
                        <li>Construcción Ciudadanía</li>
                        <li>Educación Artística</li>
                        <li>Educación Física</li>
                        <li>Inglés</li>
                        <li>Matemática</li>
                        <li>Prácticas del lenguaje</li>
                    </ul>
                    <ul class="subjects-list" id="subjects_2" style="display:none;">
                        <li>Lenguajes Tecnológicos II</li>
                        <li>Procedimientos Técnicos II</li>
                        <li>Sistemas Tecnológicos II</li>
                        <li>Ciencias Naturales</li>
                        <li>Ciencias Sociales</li>
                        <li>Construcción Ciudadanía</li>
                        <li>Educación Artística</li>
                        <li>Educación Física</li>
                        <li>Inglés</li>
                        <li>Matemática</li>
                        <li>Prácticas del lenguaje</li>
                    </ul>
                    <ul class="subjects-list" id="subjects_3" style="display:none;">
                        <li>Lenguajes Tecnológicos III</li>
                        <li>Procedimientos Técnicos III</li>
                        <li>Sistemas Tecnológicos III</li>
                        <li>Fisico-Química</li>
                        <li>Biología</li>
                        <li>Historia</li>
                        <li>Construcción Ciudadanía</li>
                        <li>Educación Artística</li>
                        <li>Educación Física</li>
                        <li>Inglés</li>
                        <li>Matemática</li>
                        <li>Prácticas del lenguaje</li>
                    </ul>
                </div>
            </section>
            <section id="slide_when" class="slide-section">
                <h2><i class="fa-regular fa-calendar-check"></i>¿Cuándo se abren las inscripciones?</h2>
                <p>Las inscripciones se abren en el mes de Diciembre. Para inscribirse, es necesario llevar todo lo indicado en la sección "¿Qué traer?".<br>Además, en el mes de Noviembre se realiza la ExpoTécnica, una muestra de proyectos realizados durante el año. Es una excelente oportunidad para conocer el trabajo de nuestros estudiantes y vivir la experiencia técnica desde dentro.</p>
                <div class="video-container">
                    <iframe class="responsive-video" src="https://www.youtube.com/embed/L5iSNGRq_KE?si=sEWZxuuVfOtQzNWH" title="YouTube video player" allowfullscreen></iframe>
                </div>
            </section>
        </div>
    </div>
    <?php include '../components/footer.php'; ?>

    <script src="../scripts/inscripciones.js"></script>
</body>
</html>
