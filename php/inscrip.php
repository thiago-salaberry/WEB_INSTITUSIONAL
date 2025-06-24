<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/inscrip.css">
    <title>Inscripciones</title>
    <script type="module">
        var porque = document.getElementById("1")
        var que = document.getElementById("2")
        var cuando = document.getElementById("3")
        var materias = document.getElementById("4")

        var title = document.getElementById("title")
        var info = document.getElementById("info")
        var image = document.getElementById("insc-image")  // Referencia a la imagen

        porque.classList.add("active")   
        porque.addEventListener("click", textPorque)
        que.addEventListener("click", textQue)
        cuando.addEventListener("click", textCuando)
        materias.addEventListener("click", textMaterias)

        function textPorque() {
            title.innerHTML = "¿POR QUE INSCRIBIRSE EN LA TECNICA?"    
            info.innerHTML = "¿Te gusta resolver problemas y crear soluciones innovadoras? En nuestra escuela, contamos con los recursos necesarios para que puedas expresar tu creatividad. Tendrás acceso a computadoras, netbooks y herramientas de trabajo. Desde el primer día, estarás trabajando en proyectos, desde la creación de un horno solar, un semáforo con leds y de forma más avanzada la producción de circuitos electrónicos simples hasta aplicaciones web complejas. Esta experiencia te permitirá desarrollar habilidades clave como el pensamiento crítico, la resolución de problemas y el trabajo en equipo, preparándote para los desafíos del mundo profesional."
            porque.classList.add("active")   
            que.classList.remove("active") 
            cuando.classList.remove("active")
            materias.classList.remove("active")
            image.style.display = "none"  // Oculta la imagen cuando no es necesario
            document.getElementById("insc-video").style.display = "none";
        }    

        function textQue() {
            const queTraer = document.querySelector('.quetraer');
            title.innerHTML = "¿Que hay que traer?"
            info.innerHTML = `
              <li>Constancia de 6to grado aprobado (que diga sin adeudar materias).</li>
              <li>Fotocopia de partida de nacimiento y de las vacunas aplicadas al alumno.</li>
              <li>Original y fotocopias del D.N.I. del alumno y de cada uno de los padres.</li>
              <li>Fotocopias del D.N.I. de personas autorizadas a retirar al alumno.</li>
              <li>2 fotos 4x4.</li>
              <li>Solicitud de inscripción con información de salud y Autorización de uso de imagen y personas autorizadas a retirar.</li>
              <li>1 Legajo. Se compra en la escuela, lo vende cooperadora en la fecha de inscripción.</li>
            `;
            porque.classList.remove("active")
            que.classList.add("active")
            cuando.classList.remove("active")
            materias.classList.remove("active")
            image.style.display = "none" 
            document.getElementById("insc-video").style.display = "none";    
        }      

            function textCuando() {
            title.innerHTML = "¿Cuándo se abren las inscripciones?";    
            info.innerHTML = "Las inscripciones se abren en el mes de Diciembre, para esto usted tiene que llevar todo lo que dice en la sección de Qué Traer. En el mes de Noviembre de cada año se realiza lo que se llama la ExpoTécnica, que consiste en una exposición sobre los Proyectos trabajados durante el año y las personas que quieran ingresar a la escuela para ver estos proyectos son bienvenidos. Lo siguiente es un video que se hizo en vivo sobre la Expotécnica: ";  
            porque.classList.remove("active");   
            que.classList.remove("active"); 
            cuando.classList.add("active");
            materias.classList.remove("active");

            // Oculta la imagen y muestra el video
            image.style.display = "none";
            document.getElementById("insc-video").style.display = "block";
        }
  

        function textMaterias(){
            title.innerHTML = "Materias Ciclo Básico"
            info.innerHTML = `
            <div class="form-materia">
              <div class="materia-column">
                  <h2>Primer Año 1°</h2>
                  <ul>
                      <li>Lenguajes Tecnológicos.</li>
                      <li>Procedimientos Técnicos.</li>
                      <li>Sistemas Tecnológicos.</li>
                      <li>Ciencias Naturales.</li>
                      <li>Ciencias Sociales.</li>
                      <li>Construcción Ciudadana</li>
                      <li>Educación Artística</li>
                      <li>Educación Física</li>
                      <li>Inglés</li>
                      <li>Matemática</li>
                      <li>Prácticas del Lenguaje</li>
                  </ul>
              </div>
              <div class="materia-column">
                  <h2>Segundo Año 2°</h2>
                  <ul>
                      <li>Lenguajes Tecnológicos.</li>
                      <li>Procedimientos Técnicos.</li>
                      <li>Sistemas Tecnológicos.</li>
                      <li>Biología</li>
                      <li>Construcción Ciudadana</li>
                      <li>Educación Artística</li>
                      <li>Educación Física</li>
                      <li>Físico-Química</li>
                      <li>Geografía</li>
                      <li>Historia</li>
                      <li>Inglés</li>
                      <li>Matemática</li>
                      <li>Prácticas del Lenguaje</li>
                  </ul>
              </div>
              <div class="materia-column">
                  <h2>Tercer Año 3°</h2>
                  <ul>
                      <li>Lenguajes Tecnológicos.</li>
                      <li>Procedimientos Técnicos.</li>
                      <li>Sistemas Tecnológicos.</li>
                      <li>Biología</li>
                      <li>Construcción Ciudadana</li>
                      <li>Educación Artística</li>
                      <li>Educación Física</li>
                      <li>Físico-Química</li>
                      <li>Geografía</li>
                      <li>Historia</li>
                      <li>Inglés</li>
                      <li>Matemática</li>
                      <li>Prácticas del Lenguaje</li>
                  </ul>
              </div>
            </div>
            `;
            porque.classList.remove("active")
            que.classList.remove("active")
            cuando.classList.remove("active")
            materias.classList.add("active")
            image.style.display = "none"
            document.getElementById("insc-video").style.display = "none";
        }
    </script>

</head>
<?php include("../includes/navbar.php"); ?>
<body>
    <main>
        <h1 class="ins-title">Incripciones 2025</h1>
        <div class="btn-holder">
            <div class="btn" id="1">¿Por qué inscribirse?</div>
            <div class="btn" id="2">¿Qué traer?</div>
            <div class="btn" id="3">¿Cuándo abren?</div>
            <div class="btn" id="4">Materias C.B.</div>
        </div>
        <div class="content-holder">
        <div class="content">
            <h1 id="title">¿POR QUE INSCRiBIRSE EN LA TÉCNICA?</h1>
            <p id="info">¿Te gusta resolver problemas y crear soluciones innovadoras? En nuestra escuela, contamos con los recursos necesarios para que puedas expresar tu creatividad. Tendrás acceso a computadoras, netbooks y herramientas de trabajo. Desde el primer día, estarás trabajando en proyectos, desde la creación de un horno solar, un semáforo con leds y de forma más avanzada la producción de circuitos electrónicos simples hasta aplicaciones web complejas. Esta experiencia te permitirá desarrollar habilidades clave como el pensamiento crítico, la resolución de problemas y el trabajo en equipo, preparándote para los desafíos del mundo profesional.</p>
            <img id="insc-image" src="img/insc.png" alt="Inscripciones" style="display: none;">
            <iframe id="insc-video" width="560" height="395" src="https://www.youtube.com/embed/KXPRl7s9-dI?si=4Z9W0Q4s5myx5S6J" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="display: none;"></iframe>
            <center><p>Consultas solo por mail: inscripcion@tecnica1vl.org</p></center>
        </div>

        </div>
    </main>
</body>
</html>