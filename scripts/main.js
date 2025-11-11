// ========================================
// FUNCIONALIDAD DE LA PÁGINA PRINCIPAL
// ========================================

document.addEventListener('DOMContentLoaded', function() {
    
    // ========================================
    // ANIMACIÓN DE OLA EN SUBTÍTULO AL HACER CLIC
    // ========================================
    const subtitle = document.getElementById('subtitle');
    if (subtitle) {
        subtitle.addEventListener('click', function() {
            // Remover la clase si ya está activa
            subtitle.classList.remove('wave-active');
            
            // Agregar la clase después de un pequeño delay para reiniciar la animación
            setTimeout(() => {
                subtitle.classList.add('wave-active');
            }, 10);
            
            // Remover la clase después de que termine la animación
            setTimeout(() => {
                subtitle.classList.remove('wave-active');
            }, 2500);
        });
    }
    
    // ========================================
    // NAVEGACIÓN CON FLECHAS DE SCROLL
    // ========================================
    const sections = ['inicio', 'historia', 'autoridades', 'asociacion', 'actualidad', 'footer'];
    let currentSectionIndex = 0; // Índice de la sección actual

    // Función para navegar a la siguiente sección
    function goToNextSection() {
        if (currentSectionIndex < sections.length - 1) {
            currentSectionIndex++;
            
            // Si llegamos al footer, usar querySelector en lugar de getElementById
            if (sections[currentSectionIndex] === 'footer') {
                const footer = document.querySelector('.footer');
                if (footer) {
                    footer.scrollIntoView({ 
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            } else {
                // Para las demás secciones, usar getElementById
                const nextSection = document.getElementById(sections[currentSectionIndex]);
                if (nextSection) {
                    nextSection.scrollIntoView({ 
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        }
    }

    // Función para detectar en qué sección estamos actualmente
    function updateCurrentSection() {
        const scrollPosition = window.scrollY + window.innerHeight / 2;
        
        sections.forEach((sectionId, index) => {
            const section = document.getElementById(sectionId);
            if (section) {
                const sectionTop = section.offsetTop;
                const sectionBottom = sectionTop + section.offsetHeight;
                
                // Verificar si la posición del scroll está dentro de esta sección
                if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                    currentSectionIndex = index;
                }
            }
        });
    }

    // Agregar eventos a todas las flechas de navegación
    const scrollArrows = document.querySelectorAll('.scroll-arrow');
    scrollArrows.forEach(arrow => {
        arrow.addEventListener('click', function(e) {
            e.preventDefault();
            
            // EFECTO VISUAL: Animación de clic en la flecha
            this.classList.add('clicked');
            setTimeout(() => {
                this.classList.remove('clicked');
            }, 300);
            
            // Navegar a la siguiente sección
            goToNextSection();
        });
    });

    // ========================================
    // CONTROL DE VISIBILIDAD DE LAS FLECHAS
    // ========================================
    function updateArrowVisibility() {
        const arrows = document.querySelectorAll('.scroll-arrow');
        arrows.forEach((arrow, index) => {
            // Atenuar las flechas si estamos en la última sección
            if (currentSectionIndex >= sections.length - 1) {
                arrow.style.opacity = '0.3';
                arrow.style.pointerEvents = 'none'; // Deshabilitar clics
            } else {
                arrow.style.opacity = '1';
                arrow.style.pointerEvents = 'auto'; // Habilitar clics
            }
        });
    }

    // Actualizar estado de las flechas cuando el usuario hace scroll
    window.addEventListener('scroll', function() {
        updateCurrentSection();
        updateArrowVisibility();
    });

    // Configuración inicial de las flechas
    updateArrowVisibility();

    // ========================================
    // BOTÓN "VOLVER ARRIBA"
    // ========================================
    const backToTop = document.getElementById('backToTop');
    
    if (backToTop) {
        // Mostrar/ocultar el botón según la posición del scroll
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });
        
        // Funcionalidad del botón: volver al inicio
        backToTop.addEventListener('click', function() {
            const heroSection = document.getElementById('inicio');
            if (heroSection) {
                heroSection.scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'start'
                });
                currentSectionIndex = 0; // Resetear el índice a la primera sección
            }
        });
    }

    // Mensaje de confirmación en consola
    console.log('🎓 Técnica N°1 de Vicente López - Página principal cargada correctamente');
});

// ========================================
// ESTILOS DINÁMICOS PARA ANIMACIONES - SIMPLIFICADO
// ========================================
const indexStyle = document.createElement('style');
indexStyle.textContent = `
    /* Las secciones parallax mantienen opacidad normal sin efectos de aparición */
    .parallax-section {
        opacity: 1;
    }
    
    /* Las animaciones de texto se mantienen pero sin dependencia de .animate-in */
    .section-title {
        animation: aparecerDesdeIzquierda 1s ease-out 0.2s both;
    }
    
    .section-subtitle {
        animation: aparecerDesdeAbajo 1s ease-out 0.4s both;
    }
    
    .content-overlay {
        animation: aparecerDesdeDerecha 1s ease-out 0.6s both;
    }
`;
// Agregar los estilos al documento
document.head.appendChild(indexStyle);
