/**
 * Módulo de gestión de modales para autoridades
 * Técnica N° 1 de Vicente López
 */

// Configuración de animaciones
const ANIMATION_DURATION = 300;

/**
 * Abre el modal con información específica de la autoridad
 * @param {string} nombre - Nombre de la autoridad
 * @param {string} cargo - Cargo de la autoridad
 * @param {string} imagen - URL de la imagen
 * @param {string} descripcion - Descripción de la autoridad
 */
function abrirModal(nombre, cargo, imagen, descripcion) {
    const modal = document.getElementById('modalDirectivo');
    const modalNombre = document.getElementById('modalNombre');
    const modalCargo = document.getElementById('modalCargo');
    const modalImagen = document.getElementById('modalImagen');
    const modalDescripcion = document.getElementById('modalDescripcion');
    
    if (modal && modalNombre && modalCargo && modalImagen && modalDescripcion) {
        // Intercambiar el orden: mostrar cargo en grande y nombre pequeño
        modalNombre.textContent = cargo; // Ahora muestra el cargo en grande
        modalCargo.textContent = nombre; // Ahora muestra el nombre pequeño
        modalImagen.src = imagen;
        modalImagen.alt = `Foto de ${nombre}`;
        modalDescripcion.textContent = descripcion;
        
        // Mostrar modal con animación
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
        document.body.classList.add('modal-open');
        
        // Agregar listener para cerrar con Escape
        document.addEventListener('keydown', cerrarModalConEscape);
        
        // Animación de entrada
        setTimeout(() => {
            modal.style.opacity = '1';
        }, 10);
    }
}

/**
 * Cierra el modal de autoridad
 */
function cerrarModal() {
    const modal = document.getElementById('modalDirectivo');
    const modalContent = modal ? modal.querySelector('.modal-content') : null;
    
    if (modal && modalContent) {
        // Agregar clases de animación de salida
        modal.classList.add('fade-out');
        modalContent.classList.add('slide-out');
        
        // Ocultar después de la animación
        setTimeout(() => {
            modal.style.display = 'none';
            modal.classList.remove('fade-out');
            modalContent.classList.remove('slide-out');
            document.body.style.overflow = 'auto';
            document.body.classList.remove('modal-open');
        }, ANIMATION_DURATION);
        
        // Remover listener del escape
        document.removeEventListener('keydown', cerrarModalConEscape);
    }
}

/**
 * Función para cerrar modal con tecla Escape
 * @param {KeyboardEvent} event - Evento del teclado
 */
function cerrarModalConEscape(event) {
    if (event.key === 'Escape') {
        cerrarModal();
    }
}

/**
 * Cierra el modal al hacer clic fuera de él
 */
window.onclick = function(event) {
    const modal = document.getElementById('modalDirectivo');
    if (event.target === modal) {
        cerrarModal();
    }
}

/**
 * Inicialización de animaciones cuando los elementos están visibles
 */
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const section = entry.target;
                const cards = section.querySelectorAll('.autoridad');
                
                // Activar las animaciones CSS
                cards.forEach((card, index) => {
                    card.style.animationPlayState = 'running';
                });
                
                observer.unobserve(section);
            }
        });
    }, observerOptions);

    // Pausar todas las animaciones inicialmente
    const allCards = document.querySelectorAll('.autoridad');
    allCards.forEach(card => {
        card.style.animationPlayState = 'paused';
    });

    // Observar todas las secciones con grids
    const sections = document.querySelectorAll('.grid');
    sections.forEach(section => {
        observer.observe(section);
    });
}

/**
 * Inicialización cuando el DOM está listo
 */
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar animaciones de scroll
    initScrollAnimations();
    
    // Manejar errores de carga de imágenes
    const images = document.querySelectorAll('.autoridad img, .modal-image img');
    images.forEach(img => {
        img.addEventListener('error', function() {
            this.src = '../img/logo.webp'; // Imagen de fallback
        });
    });
    
    // Mejorar accesibilidad
    const autoridadCards = document.querySelectorAll('.autoridad');
    autoridadCards.forEach(card => {
        // Agregar tabindex para navegación con teclado
        card.setAttribute('tabindex', '0');
        
        // Manejar eventos de teclado
        card.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                this.click();
            }
        });
        
        // Agregar indicador visual de foco
        card.addEventListener('focus', function() {
            this.style.outline = '3px solid #667eea';
            this.style.outlineOffset = '2px';
        });
        
        card.addEventListener('blur', function() {
            this.style.outline = 'none';
        });
    });
});
