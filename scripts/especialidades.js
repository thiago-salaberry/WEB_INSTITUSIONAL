/**
 * Módulo de gestión de modales para especialidades técnicas
 * Técnica N° 1 de Vicente López
 */

// Configuración de animaciones
const ANIMATION_DURATION = 300;

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