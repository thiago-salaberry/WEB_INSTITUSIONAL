<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Especialidades</title>
    <link rel="stylesheet" href="../css/especialidades.css">
</head>
<body>
    
		<?php include("../includes/navbar.php"); ?>
        

    <div class="container">
        <div class="tabs">
            <button id="programacion" class="btn btn-primary tab" type="button">Programación</button>
            <button id="electronica" class="btn btn-primary tab active" type="button">Electrónica</button>
            
            <button ></button>
        </div>

        <div class="content text-electronica hidden">
            <div class="sidebar">
                <ul>
                    <li><a href="#" class="section-link" data-section="info-electronica">Información Básica<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
                    </svg></a></li>
                    <li><a href="#" class="section-link" data-section="objetivo-electronica">Objetivo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
                    </svg></a></li>
                    <li><a href="#" class="section-link" data-section="materias-electronica">Materias<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
                    </svg></a></li>
                    <li><a href="#" class="section-link" data-section="bimodalidad-electronica">Bimodalidad<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
                    </svg></a></li>
                    <li><a href="#" class="section-link" data-section="perfil-electronica">Perfil Académico<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
                    </svg></a></li>
                    <li><a href="#" class="section-link" data-section="curricular-electronica">Diseño Curricular<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
                    </svg></a></li>
                    <li><a href="#" class="section-link" data-section="proyectos-electronica">Proyectos de la Especialidad<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
                    </svg></a></li>
                </ul>
            </div>

            <div id="Bloque" class="main-content">
                <div id="info-electronica" class="section-content">
                    <h2>Información Básica de Electrónica</h2>
                    <p>La carrera de Técnico en Electrónica, a nivel secundario, tiene como propósito formar profesionales capaces de adaptarse a cambios tecnológicos en un entorno laboral dinámico. El programa ofrece una sólida base en la teoría y la práctica de sistemas electrónicos, cubriendo desde fundamentos en circuitos hasta aplicaciones avanzadas en telecomunicaciones, electrónica industrial y control automático.</p>
                    <br>
                    <p>El estudiante adquiere competencias en el diseño, montaje, operación y mantenimiento de sistemas electrónicos tanto analógicos como digitales. Al finalizar sus estudios, estará calificado para desempeñarse en diversos sectores, como telecomunicaciones, energía, empresas industriales, y laboratorios de reparación y mantenimiento de equipos electrónicos.</p>
                </div>

                <div id="objetivo-electronica" class="section-content hidden">
                    <h2>Objetivo de Electrónica</h2>
                    <p>La carrera de Técnico en Electrónica tiene como objetivo formar egresados con habilidades prácticas y teóricas para diseñar, analizar, instalar y mantener sistemas electrónicos que respondan a las demandas de la industria moderna. El enfoque está en la resolución de problemas técnicos y la innovación en tecnologías aplicadas en telecomunicaciones, sistemas de control y electrónica industrial.</p>
                    <br>
                    <p>Además, se busca que los estudiantes desarrollen una conciencia ética y ambiental, así como competencias para emprender proyectos tecnológicos, adaptarse a nuevos desafíos y trabajar en equipos multidisciplinarios.</p>
                </div>

                <div id="materias-electronica" class="section-content hidden">
                    <h2>Materias de Ciclo Superior</h2>
                    <div class="Materias">
                        <div>
                            <h3>4to Año:</h3>
                            <ul>
                                <li>Aplicaciones de electronica analogica</li>
                                <li>Aplicaciones de electrónica digital</li>
                                <li>Educación física</li>
                                <li>Fundamentos de los modelos circuitales</li>
                                <li>Física</li>
                                <li>Geografía</li>
                                <li>Historia</li>
                                <li>Inglés</li>
                                <li>Literatura</li>
                                <li>Matemática</li>
                                <li>Montaje de proyectos electrónicos</li>
                                <li>Química</li>
                                <li>Salud y adolescencia</li>
                                <li>Tecnología electrónica</li>
                            </ul>
                        </div>
                        <div>
                            <h3>5to Año:</h3>
                            <ul>
                                <li>Aplicaciones de electronica analogica</li>
                                <li>Aplicaciones de electrónica digital</li>
                                <li>Diseños asistidos y simulación electrónica</li>
                                <li>Educación física</li>
                                <li>Geografía</li>
                                <li>Historia (Bimodal)</li>
                                <li>Inglés</li>
                                <li>Lenguajes electrónicos</li>
                                <li>Literatura</li>
                                <li>Matemática</li>
                                <li>Montaje de proyectos electrónicos</li>
                                <li>Análisis de los modelos circuitales</li>
                                <li>Politica y ciudadania (Bimodal)</li>
                            </ul>
                        </div>
                        <div>
                            <h3>6to Año:</h3>
                            <ul>
                                <li>Aplicaciones de electronica analogica</li>
                                <li>Aplicaciones de electrónica digital</li>
                                <li>Arte (Bimodal)</li>
                                <li>Derecho del trabajo (Bimodal)</li>
                                <li>Educación física</li>
                                <li>Filosofía (Bimodal)</li>
                                <li>Inglés</li>
                                <li>Instalaciones industriales</li>
                                <li>Lenguajes electrónicos</li>
                                <li>Literatura (Bimodal)</li>
                                <li>Matemática aplicada</li>
                                <li>Montaje de proyectos electrónicos</li>
                                <li>Sistemas de Comunicaciones</li>
                                <li>Sistemas Productivos (Bimodal)</li>
                            </ul>
                        </div>
                        <div>
                            <h3>7mo Año:</h3>
                            <ul>
                                <li>- Emprendimientos, productivos y desarrollo Local (Bimodal)</li>
                                <li>Instalaciones industriales</li>
                                <li>Proyecto y diseño electrónico</li>
                                <li>Sistemas de Comunicaciones</li>
                                <li>Sistemas de control</li>
                                <li>Practicas Profesionalizantes</li>
                                <li>Seguridad, Higiene y Protección ambiental (Bimodal)</li>
                                <li>Electrónica aplicada.</li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <p class="LinkProyectos">Para ver los horarios de Ciclo Superior, haga clic <a href="https://docs.google.com/spreadsheets/d/1AFgWqZLsRZDaatKxRZh1GZzBkg34PU5N/edit?usp=sharing&ouid=104523949302020779981&rtpof=true&sd=true">aquí</a>.</p>
                    <br>
                </div>

                <div id="bimodalidad-electronica" class="section-content hidden">
                <h2>Bimodalidad <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                    <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4q0 1 .25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75Q6 13 6 12H2s-2 0-2-2zm1.398-.855a.76.76 0 0 0-.254.302A1.5 1.5 0 0 0 1 4.01V10c0 .325.078.502.145.602q.105.156.302.254a1.5 1.5 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.76.76 0 0 0 .254-.302 1.5 1.5 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.76.76 0 0 0-.302-.254A1.5 1.5 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145"/>
                    </svg></h2>
                    <p>La bimodalidad en el diseño curricular combina enseñanza presencial y virtual, ofreciendo flexibilidad para que los estudiantes participen tanto en persona como en línea. Este modelo permite acceso remoto a contenidos, complementa la educación presencial con recursos digitales, y facilita el aprendizaje a ritmo propio en la modalidad virtual. Además, promueve la interacción continua entre estudiantes y docentes y permite evaluaciones y seguimiento en ambas modalidades.</p>
                    <br>
                </div>

                <div id="perfil-electronica" class="section-content hidden">
                    <h2>Perfil Académico de Electrónica</h2>
                    <p>El título de Técnico en Electrónica habilita a los egresados para proyectar y diseñar componentes electrónicos, realizar ensayos y mediciones, realizar mantenimiento, montar e instalar equipos, seleccionar y comercializar productos, y desarrollar emprendimientos relacionados con la electrónica.</p>
                    <br>
                    <p>Estos profesionales pueden desempeñarse en diversos ámbitos como la electrónica industrial, telecomunicaciones, instrumentación electrónica e informática.</p>
                </div>


                <div id="curricular-electronica" class="section-content hidden">
                    <h2>Diseño Curricular de Electrónica</h2>
                    <p>La formación del Técnico en Electrónica abarca áreas como matemática, física, química, tecnología y economía, junto con conocimientos específicos en electrónica como el uso de materiales y herramientas, montaje de circuitos, dispositivos electrónicos, máquinas e instalaciones eléctricas, instrumentación, control electrónico, sistemas de telecomunicaciones y electrónica industrial.<p>
                    <p>Además, incluye prácticas profesionalizantes que permiten aplicar los conocimientos teóricos en entornos reales.</p>
                    <br>
                    <p>La carga horaria mínima total de la carrera es de 6480 horas, distribuidas en formación general, científico-tecnológica (1700 horas), técnica específica (2000 horas) y prácticas profesionalizantes (mínimo 200 horas).</p>
                </div>

                <div id="proyectos-electronica" class="section-content hidden">
                    <h2>Proyectos de la Especialidad</h2>
                    <p>Presentamos los proyectos de los alumnos de 7mo año, de las carreras programación y electrónica. Estos proyectos son el resultado de su aprendizaje y creatividad, mostrando cómo aplican sus conocimientos para resolver problemas reales. Cada uno de ellos refleja el esfuerzo y la pasión de los estudiantes, y queremos de compartir sus logros y contribuciones a la comunidad.</p>
                    <br>
                    <p class="LinkProyectos">Para ver los proyectos de 7mo, haga clic <a href="https://drive.google.com/drive/folders/1LVf-bgoH9n6DCn356pVyjmbVRcr_9bIu?usp=sharing">aquí</a>.</p>
                </div>
            </div>
        </div>
        <div class="content text-programacion hidden">
            <div class="sidebar">
                <ul>
                    <li><a href="#" class="section-link" data-section="info-programacion">Información Básica<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
                    </svg></a></li>
                    <li><a href="#" class="section-link" data-section="materias-programacion">Materias<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
                    </svg></a></li>
                    <li><a href="#" class="section-link" data-section="bimodalidad-programacion">Bimodalidad<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
                    </svg></a></li>
                    <li><a href="#" class="section-link" data-section="perfil-programacion">Perfil Académico<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
                    </svg></a></li>
                    <li><a href="#" class="section-link" data-section="trayectoria-formativa">Trayectoria Formativa<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
                    </svg></a></li>
                    <li><a href="#" class="section-link" data-section="proyectos-programacion">Proyectos de la Especialidad<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
                    </svg></a></li>
                </ul>
            </div>

            <div id="Bloque" class="main-content">
                <div id="info-programacion" class="section-content">
                    <h2>Información Básica de Programación</h2>
                    <p>La carrera de programación se centra en desarrollar las habilidades necesarias para crear software y aplicaciones informáticas. Los estudiantes aprenden a programar en diversos lenguajes como JavaScript, Python y C++, con énfasis en la resolución de problemas, la lógica de programación y el diseño de algoritmos. Al finalizar sus estudios, los graduados están capacitados para desempeñarse como programadores, desarrolladores de software y en otros roles relacionados dentro de la industria tecnológica. Además, adquieren una sólida comprensión de los principios fundamentales de la informática, lo que les permite adaptarse a las cambiantes necesidades del sector y continuar su desarrollo profesional a lo largo de sus carreras.</p>
                </div>


                <div id="materias-programacion" class="section-content hidden">
                <h2>Materias de Ciclo Superior</h2>
                    <div class="Materias">
                        <div class="gallery">
                            <div class="image-container">
                                <p>4°4</p>
                                <img src="../img/4°4.png" alt="Imagen 1" onclick="openModal(this)">
                            </div>
                            <div class="image-container">
                                <p>5°3</p>
                                <img src="../img/5°3.png" alt="Imagen 2" onclick="openModal(this)">
                            </div>
                            <div class="image-container">
                                <p>6°3</p>
                                <img src="../img/6°3.png" alt="Imagen 3" onclick="openModal(this)">
                            </div>
                            <div class="image-container">
                                <p>7°2</p>
                                <img src="../img/7°2.png" alt="Imagen 4" onclick="openModal(this)">
                            </div>
                        </div>

                        <div class="modal" id="modal">
                            <button class="close" onclick="closeModal()">×</button>
                            <img id="modalImage" src="" alt="Imagen Ampliada">
                        </div>
                    </div>
                </div>

         <div id="bimodalidad-programacion" class="section-content">
            <h2>Bimodalidad</h2>
        <div class="info-block">
            <h3>Funcionamiento de la Bimodalidad</h3>
            <p>La bimodalidad en el diseño curricular combina enseñanza presencial y virtual, ofreciendo flexibilidad para que los estudiantes participen tanto en persona como en línea. Este modelo permite acceso remoto a contenidos, complementa la educación presencial con recursos digitales, y facilita el aprendizaje a ritmo propio en la modalidad virtual.</p>
        </div>
        <div class="info-block">
            <h3>Flexibilidad de Acceso</h3>
            <p>Los estudiantes pueden acceder a los contenidos y actividades educativas en persona o desde ubicaciones remotas, utilizando herramientas en línea.</p>
        </div>
        <div class="info-block">
            <h3>Complemento de Recursos</h3>
            <p>La educación presencial se complementa con recursos digitales, como plataformas de aprendizaje, donde se cargan materiales adicionales, guías de estudio y ejercicios.</p>
        </div>
        <div class="info-block">
            <h3>Adaptabilidad del Aprendizaje</h3>
            <p>Los estudiantes pueden avanzar a su propio ritmo en la modalidad virtual, revisando contenidos y reforzando temas según sus necesidades.</p>
        </div>
        <div class="info-block">
            <h3>Interacción en Doble Modalidad</h3>
            <p>Se mantiene la interacción entre estudiantes y docentes en ambas modalidades, utilizando foros, chats y sesiones en vivo para asegurar la comunicación y el soporte necesarios.</p>
        </div>
        <div class="info-block">
            <h3>Evaluación y Seguimiento</h3>
            <p>Las evaluaciones pueden realizarse en cualquiera de las modalidades, con herramientas que permiten a los docentes monitorear el progreso y ajustar el apoyo educativo.</p>
        </div>
    </div>
                <div id="perfil-programacion" class="section-content hidden">
                    <h2 class="titulo-perfil">Perfil Académico de Programación 🎓</h2>
                    <p class="descripcion-perfil">El Técnico en Programación está capacitado para:</p>
                    <ul class="perfil-lista">
                        <li>🖥️ Realizar programas o componentes de sistemas de computación.</li>
                        <li>📋 Interpretar especificaciones de diseño, documentar productos realizados, verificar componentes programados.</li>
                        <li>🔍 Buscar causas de mal funcionamiento y corregir programas o adaptarlos a cambios en las especificaciones.</li>
                        <li>👥 Desarrollar sus actividades en equipo, organizados por proyectos y cumpliendo con criterios establecidos en el perfil profesional.</li>
                    </ul>
                    <!-- Habilidades -->
                    <details class="habilidades-detalles">
                        <summary class="habilidades-resumen">
                            <div class="habilidades-checkbox"></div> Habilidades Claves
                        </summary>
                        <ul class="habilidades-lista">
                            <li>🧩 Interpretación de Especificaciones: Comprende requisitos de asignaciones de programación.</li>
                            <li>🗂️ Planificación de Trabajo: Organiza tareas en equipo según la tecnología a utilizar.</li>
                            <li>💻 Producción de Software: Desarrolla programas, módulos o componentes de sistemas de computación.</li>
                            <li>🔧 Verificación y Depuración: Verifica y depura el producto desarrollado.</li>
                            <li>🔄 Revisiones Cruzadas: Realiza revisiones de código o interfaces.</li>
                            <li>📜 Documentación Técnica y de Usuario: Documenta técnica y funcionalmente aplicaciones y sistemas.</li>
                        </ul>
                    </details>
                    <!-- Competencias -->
                    <details class="competencias-detalles">
                        <summary class="competencias-resumen">
                            <div class="competencias-checkbox"></div> Competencias Específicas
                        </summary>
                        <ul class="competencias-lista">
                            <li>🌐 Abstracción: Simplifica problemas complejos para facilitar su comprensión y solución.</li>
                            <li>🧠 Pensamiento Combinatorio: Considera alternativas sistemáticamente, manejando múltiples variables sin perder el enfoque general.</li>
                            <li>⏱️ Autorregulación: Mantiene un orden propio bajo normas explícitas o implícitas.</li>
                            <li>🗣️ Comunicación Adecuada: Transmite información en lenguaje técnico, incluso en inglés.</li>
                            <li>🤝 Trabajo en Equipo: Comparte información y conocimientos, considerando las necesidades de los usuarios y colaborando efectivamente.</li>
                        </ul>
                    </details>

                <!-- Funciones y Tareas Específicas -->
                <details class="funciones-detalles">
                    <summary class="funciones-resumen">
                        <div class="funciones-checkbox"></div> Funciones y Tareas Específicas 📌
                    </summary>
                    <ul class="funciones-lista">
                        <li>
                            <strong>Interpretación de Especificaciones de Diseño:</strong>
                            <ul>
                                <li>Analizar el problema a resolver y su alcance.</li>
                                <li>Validar coherencia e integridad de especificaciones.</li>
                                <li>Convalidar interpretaciones con quienes hayan diseñado o provisto especificaciones.</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Planificación y Estrategia de Trabajo:</strong>
                            <ul>
                                <li>Identificar aspectos críticos, dividir en subtareas, y establecer una secuencia de trabajo.</li>
                                <li>Estimar tiempos, establecer prioridades y consultar aspectos ambiguos.</li>
                                <li>Buscar información en fuentes confiables y aplicar metodologías de resolución de problemas.</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Producción de Programas y Componentes:</strong>
                            <ul>
                                <li>Desarrollar algoritmos para resolver problemas asignados.</li>
                                <li>Definir código, estructuras de datos, clases y objetos necesarios.</li>
                                <li>Diseñar interfaces de usuario acordes al contexto.</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Documentación Técnica y de Usuario:</strong>
                            <ul>
                                <li>Describir nuevas clases, registrar decisiones de diseño y resultados de pruebas.</li>
                                <li>Documentar incidentes, errores y versiones del producto.</li>
                            </ul>
                        </li>

                    </ul>
                </details>


                <div class="conclusion-container">
                    <p class="conclusion-text">En resumen, el Técnico en Programación posee habilidades y competencias clave para el desarrollo de soluciones tecnológicas eficientes y colaborativas en equipos multidisciplinarios.</p>
                </div>

                </div>

            <div id="trayectoria-formativa" class="section-content">
                <h2 class="titulo-curricular">Trayectoria Formativa del Técnico en Programación 🎓</h2>
                <div class="contenedor-curricular">
                    <div class="area-formativa">
                        <h3 class="subtitulo">Formación General</h3>
                        <p>Desarrolla habilidades para participar activamente en los ámbitos sociales, políticos y culturales, enfocándose en actitudes éticas frente a los cambios tecnológicos y sociales.</p>
                    </div>

                    <div class="area-formativa">
                        <h3 class="subtitulo">Formación Científico-Tecnológica</h3>
                        <p>Incluye conocimientos en matemáticas, física, computación y tecnología de la información, preparando al estudiante para enfrentar retos en el campo de la programación.</p>
                    </div>

                    <div class="area-formativa">
                        <h3 class="subtitulo">Formación Técnico-Específica</h3>
                        <p>Relación directa con el perfil profesional, incluye interpretación de especificaciones, planificación del trabajo, diseño de software, bases de datos, interfaces de usuario, y más.</p>
                    </div>
                </div>

                <div class="practicas">
                    <h3 class="subtitulo">Prácticas Profesionalizantes</h3>
                    <p>Conecta a los estudiantes con el entorno laboral a través de experiencias prácticas, desarrollando habilidades profesionales en sectores productivos y simulados.</p>
                </div>

                <div class="carga-horaria">
                    <h3 class="subtitulo">Carga Horaria Mínima</h3>
                    <p>Total de horas reloj: 6480 horas, distribuidas en áreas de formación científico-tecnológica, técnica específica y prácticas profesionalizantes.</p>
                </div>

                <div class="perfil-profesional">
                    <h3 class="subtitulo">Perfil Profesional del Técnico en Programación</h3>
                    <p>El Técnico en Programación está capacitado para desarrollar software, interpretar y planificar proyectos, y colaborar en equipos de trabajo multidisciplinarios.</p>
                </div>

                <div class="areas-desempeno">
                    <h3 class="subtitulo">Áreas de Desempeño Laboral</h3>
                    <p>El técnico puede desempeñarse en servicios informáticos, desarrollo y mantenimiento de software, organizaciones públicas y privadas, entre otros.</p>
                </div>
            </div>


                <div id="proyectos-programacion" class="section-content hidden">
                <h2>Proyectos de la Especialidad</h2>
                <div class="card-group">
    <div class="card">
        <img src="../img/Proyecto N°1.png" alt="Proyecto N°1">
        <div class="layer"></div>
        <div class="info">
            <h1>Proyecto N°1</h1>
            <p>Tami es una Agenda conectada a un Bot que permite verificar turnos, servicios y horarios de manera automatizada</p>
        </div>
    </div>
    <div class="card">
        <img src="../img/Proyecto N°2.png" alt="Proyecto N°2">
        <div class="layer"></div>
        <div class="info">
            <h1>Proyecto N°2</h1>
            <p>Ruta Educativa busca instituciones educativas básicas con información, calificaciones y mapa interactivo.</p>
        </div>
    </div>
    <div class="card">
        <img src="../img/Proyecto N°3.png" alt="Proyecto N°3">
        <div class="layer"></div>
        <div class="info">
            <h1>Proyecto N°3</h1>
            <p>“MapAware” es una app que alerta en tiempo real sobre eventos mediante reportes de los usuarios.</p>
        </div>
    </div>
    <div class="card">
        <img src="../img/Proyecto N°4.png" alt="Proyecto N°4">
        <div class="layer"></div>
        <div class="info">
            <h1>Proyecto N°4</h1>
            <p>Gestion Academica digitaliza facilita la administración del alumno y dinamizar el acceso a sus trayectorias educativas. </p>
        </div>
    </div>
    <div class="card">
        <img src="../img/Proyecto N°5.png" alt="Proyecto N°4">
        <div class="layer"></div>
        <div class="info">
            <h1>Proyecto N°5</h1>
            <p>BairesCompare es una plataforma que
            compare precios y agiliza el proceso de planificación de compras </p>
        </div>
    </div>
</div>
    </div>
    <script src="../scripts/especialidades.js"></script>
	</div>

</body>
</html>
