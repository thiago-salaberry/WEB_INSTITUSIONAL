/**
 * Módulo de gestión de modales para especialidades técnicas
 * Técnica N° 1 de Vicente López
 */

// Configuración de animaciones
const ANIMATION_DURATION = 300;

// Base de datos de tecnologías
const TECH_DATA = {
    // Programación
    python: {
        icon: 'fab fa-python',
        name: 'Python',
        description: 'Lenguaje de programación versátil y potente, ideal para desarrollo web, análisis de datos, inteligencia artificial y automatización. Su sintaxis clara y legible lo convierte en una excelente opción tanto para principiantes como para desarrolladores experimentados.'
    },
    javascript: {
        icon: 'fab fa-js-square',
        name: 'JavaScript',
        description: 'Lenguaje fundamental para el desarrollo web moderno. Permite crear aplicaciones interactivas del lado del cliente y del servidor (Node.js), siendo esencial para el desarrollo full-stack y la creación de experiencias de usuario dinámicas.'
    },
    html5: {
        icon: 'fab fa-html5',
        name: 'HTML5',
        description: 'Última versión del lenguaje de marcado estándar para crear páginas web. Proporciona una estructura semántica robusta y nuevas funcionalidades como video, audio y gráficos, siendo la base fundamental de cualquier aplicación web.'
    },
    php: {
        icon: 'fab fa-php',
        name: 'PHP',
        description: 'Lenguaje de scripting del lado del servidor ampliamente utilizado para desarrollo web. Ideal para crear sitios web dinámicos, sistemas de gestión de contenido y aplicaciones web robustas con integración de bases de datos.'
    },
    nodejs: {
        icon: 'fab fa-node-js',
        name: 'Node.js',
        description: 'Entorno de ejecución de JavaScript del lado del servidor que permite crear aplicaciones web escalables y de alto rendimiento. Perfecto para APIs REST, aplicaciones en tiempo real y microservicios.'
    },
    java: {
        icon: 'fab fa-java',
        name: 'Java',
        description: 'Lenguaje de programación orientado a objetos, robusto y multiplataforma. Ampliamente utilizado en aplicaciones empresariales, desarrollo Android y sistemas distribuidos de gran escala.'
    },
    sql: {
        icon: 'fas fa-database',
        name: 'SQL',
        description: 'Lenguaje estándar para gestionar y manipular bases de datos relacionales. Esencial para el almacenamiento, consulta y administración de datos en aplicaciones modernas.'
    },
    git: {
        icon: 'fab fa-git-alt',
        name: 'Git',
        description: 'Sistema de control de versiones distribuido que permite rastrear cambios en el código, colaborar en equipo y mantener un historial completo del desarrollo de proyectos.'
    },
    
    // Electrónica
    arduino: {
        icon: 'fas fa-microchip',
        name: 'Arduino',
        description: 'Plataforma de hardware libre basada en microcontroladores que permite crear proyectos electrónicos interactivos. Ideal para prototipado rápido, IoT y sistemas embebidos de baja complejidad.'
    },
    robotica: {
        icon: 'fas fa-robot',
        name: 'Robótica',
        description: 'Disciplina que combina mecánica, electrónica y programación para crear sistemas automatizados. Incluye diseño, construcción y programación de robots para diversas aplicaciones industriales y de servicios.'
    },
    automatizacion: {
        icon: 'fas fa-bolt',
        name: 'Automatización',
        description: 'Tecnología que utiliza sistemas de control para operar equipos y procesos con mínima intervención humana. Fundamental en la industria 4.0 para mejorar eficiencia, calidad y seguridad.'
    },
    raspberry: {
        icon: 'fab fa-raspberry-pi',
        name: 'Raspberry Pi',
        description: 'Computadora de placa única que combina el poder de un ordenador con la flexibilidad de un microcontrolador. Ideal para proyectos IoT, servidores domésticos y sistemas embebidos complejos.'
    },
    plc: {
        icon: 'fas fa-cogs',
        name: 'PLC',
        description: 'Controladores Lógicos Programables utilizados en automatización industrial para controlar maquinaria y procesos. Esenciales en líneas de producción, sistemas de control y monitoreo industrial.'
    },
    scada: {
        icon: 'fas fa-desktop',
        name: 'SCADA',
        description: 'Sistemas de Supervisión, Control y Adquisición de Datos que permiten monitorear y controlar procesos industriales a distancia. Fundamentales en plantas de energía, agua y manufactura.'
    },
    labview: {
        icon: 'fas fa-chart-line',
        name: 'LabVIEW',
        description: 'Entorno de programación gráfica para sistemas de medición, control e instrumentación. Ampliamente utilizado en investigación, desarrollo de productos y automatización de pruebas.'
    },
    pcb: {
        icon: 'fas fa-memory',
        name: 'PCB Design',
        description: 'Diseño de Placas de Circuito Impreso, proceso fundamental para crear circuitos electrónicos profesionales. Incluye esquemáticos, layout, enrutado y consideraciones de fabricación.'
    }
};

/**
 * Muestra el modal con información de una tecnología específica
 */
function mostrarTechModal(techId) {
    const tech = TECH_DATA[techId];
    if (!tech) return;

    const fondoOscuro = document.getElementById('fondoOscuro');
    const techModal = document.getElementById('techModal');
    const techIcon = document.getElementById('techModalIcon');
    const techTitle = document.getElementById('techModalTitle');
    const techDescription = document.getElementById('techModalDescription');
    
    if (fondoOscuro && techModal && techIcon && techTitle && techDescription) {
        // Configurar contenido del modal
        techIcon.className = `tech-modal-icon ${tech.icon}`;
        techTitle.textContent = tech.name;
        techDescription.textContent = tech.description;
        
        // Mostrar elementos
        fondoOscuro.style.display = 'block';
        techModal.parentElement.style.display = 'block';
        
        // Animación de entrada
        setTimeout(() => {
            fondoOscuro.style.opacity = '1';
            techModal.style.transform = 'scale(1)';
            techModal.style.opacity = '1';
        }, 10);
        
        // Prevenir scroll del body
        document.body.style.overflow = 'hidden';
        
        // Agregar listener para cerrar con Escape
        document.addEventListener('keydown', cerrarTechModalConEscape);
    }
}

/**
 * Cierra el modal de tecnología
 */
function cerrarTechModal() {
    const fondoOscuro = document.getElementById('fondoOscuro');
    const techModal = document.getElementById('techModal');
    
    // Animación de salida
    if (fondoOscuro) {
        fondoOscuro.style.opacity = '0';
    }
    
    if (techModal) {
        techModal.style.transform = 'scale(0.9)';
        techModal.style.opacity = '0';
    }
    
    // Ocultar después de la animación
    setTimeout(() => {
        if (fondoOscuro) fondoOscuro.style.display = 'none';
        if (techModal && techModal.parentElement) techModal.parentElement.style.display = 'none';
        
        // Restaurar scroll del body
        document.body.style.overflow = 'auto';
    }, ANIMATION_DURATION);
    
    // Remover listener del escape
    document.removeEventListener('keydown', cerrarTechModalConEscape);
}

/**
 * Función para cerrar modal de tecnología con tecla Escape
 */
function cerrarTechModalConEscape(event) {
    if (event.key === 'Escape') {
        cerrarTechModal();
    }
}

// Mantener las funciones existentes para los modales de perfil técnico
/**
 * Muestra el modal del perfil técnico de Programación
 */
function mostrarCuadro() {
    const fondoOscuro = document.getElementById('fondoOscuro');
    const cuadro = document.getElementById('cuadro');
    
    if (fondoOscuro && cuadro) {
        // Mostrar elementos
        fondoOscuro.style.display = 'block';
        cuadro.parentElement.style.display = 'block';
        
        // Animación de entrada
        setTimeout(() => {
            fondoOscuro.style.opacity = '1';
            cuadro.style.transform = 'scale(1)';
            cuadro.style.opacity = '1';
        }, 10);
        
        // Prevenir scroll del body
        document.body.style.overflow = 'hidden';
        
        // Agregar listener para cerrar con Escape
        document.addEventListener('keydown', cerrarConEscape);
    }
}

/**
 * Muestra el modal del perfil técnico de Electrónica
 */
function mostrarCuadro2() {
    const fondoOscuro = document.getElementById('fondoOscuro');
    const cuadro2 = document.getElementById('cuadro2');
    
    if (fondoOscuro && cuadro2) {
        // Mostrar elementos
        fondoOscuro.style.display = 'block';
        cuadro2.parentElement.style.display = 'block';
        
        // Animación de entrada
        setTimeout(() => {
            fondoOscuro.style.opacity = '1';
            cuadro2.style.transform = 'scale(1)';
            cuadro2.style.opacity = '1';
        }, 10);
        
        // Prevenir scroll del body
        document.body.style.overflow = 'hidden';
        
        // Agregar listener para cerrar con Escape
        document.addEventListener('keydown', cerrarConEscape);
    }
}

/**
 * Cierra todos los modales activos
 */
function cerrarCuadro() {
    const fondoOscuro = document.getElementById('fondoOscuro');
    const cuadro = document.getElementById('cuadro');
    const cuadro2 = document.getElementById('cuadro2');
    
    // Animación de salida
    if (fondoOscuro) {
        fondoOscuro.style.opacity = '0';
    }
    
    if (cuadro) {
        cuadro.style.transform = 'scale(0.9)';
        cuadro.style.opacity = '0';
    }
    
    if (cuadro2) {
        cuadro2.style.transform = 'scale(0.9)';
        cuadro2.style.opacity = '0';
    }
    
    // Ocultar después de la animación
    setTimeout(() => {
        if (fondoOscuro) fondoOscuro.style.display = 'none';
        if (cuadro && cuadro.parentElement) cuadro.parentElement.style.display = 'none';
        if (cuadro2 && cuadro2.parentElement) cuadro2.parentElement.style.display = 'none';
        
        // Restaurar scroll del body
        document.body.style.overflow = 'auto';
    }, ANIMATION_DURATION);
    
    // Remover listener del escape
    document.removeEventListener('keydown', cerrarConEscape);
}

/**
 * Función para cerrar modal con tecla Escape
 */
function cerrarConEscape(event) {
    if (event.key === 'Escape') {
        cerrarCuadro();
    }
}

/**
 * Función para manejar los enlaces de descarga de diseños curriculares
 */
function descargarDisenoCurricular(especialidad) {
    // Aquí se pueden agregar los enlaces reales a los PDFs
    const enlaces = {
        'programacion': '#', // Reemplazar con enlace real
        'electronica': '#'   // Reemplazar con enlace real
    };
    
    if (enlaces[especialidad]) {
        window.open(enlaces[especialidad], '_blank');
    } else {
        alert('Próximamente estará disponible el diseño curricular de ' + especialidad);
    }
}

/**
 * Inicialización cuando el DOM está listo
 */
document.addEventListener('DOMContentLoaded', function() {
    // Configurar estilos iniciales para animaciones
    const cuadros = document.querySelectorAll('.card, .card2');
    cuadros.forEach(cuadro => {
        cuadro.style.transform = 'scale(0.9)';
        cuadro.style.opacity = '0';
        cuadro.style.transition = `transform ${ANIMATION_DURATION}ms ease-out, opacity ${ANIMATION_DURATION}ms ease-out`;
    });
    
    const fondoOscuro = document.getElementById('fondoOscuro');
    if (fondoOscuro) {
        fondoOscuro.style.opacity = '0';
        fondoOscuro.style.transition = `opacity ${ANIMATION_DURATION}ms ease-out`;
        
        // Agregar evento para cerrar cualquier modal al hacer clic en el fondo
        fondoOscuro.addEventListener('click', function() {
            cerrarCuadro();
            cerrarTechModal();
        });
    }
    
    // Asegurar que los contenedores estén ocultos inicialmente
    const contenedores = document.querySelectorAll('.contenedor-centro');
    contenedores.forEach(contenedor => {
        contenedor.style.display = 'none';
    });
    
    // Agregar funcionalidad a botones de diseño curricular
    const botonesDiseno = document.querySelectorAll('.activar');
    botonesDiseno.forEach(boton => {
        if (boton.textContent.includes('Diseño Curricular')) {
            boton.addEventListener('click', function() {
                const especialidad = this.closest('.cont_especialidades')
                    .querySelector('.titulo_esp').textContent.toLowerCase();
                descargarDisenoCurricular(especialidad);
            });
        }
    });
    
    console.log('Módulo de especialidades inicializado correctamente');
});