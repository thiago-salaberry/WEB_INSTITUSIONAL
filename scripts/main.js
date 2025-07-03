// ========================================
// FUNCIONALIDAD DE LA PÁGINA PRINCIPAL
// ========================================

document.addEventListener('DOMContentLoaded', function() {
    
    // ========================================
    // ANIMACIONES AL HACER SCROLL (INTERSECTION OBSERVER)
    // ========================================
    const observerOptions = {
        threshold: 0.3,        // Activar cuando el 30% del elemento sea visible
        rootMargin: '0px 0px -50px 0px'  // Margen inferior para activar antes
    };

    // Observer para detectar cuando las secciones entran en vista
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Agregar clase de animación cuando la sección sea visible
                entry.target.classList.add('animate-in');
            }
        });
    }, observerOptions);

    // Aplicar el observer a todas las secciones parallax
    const sectionsToAnimate = document.querySelectorAll('.parallax-section');
    sectionsToAnimate.forEach(section => {
        observer.observe(section);
    });
    
    // ========================================
    // NAVEGACIÓN CON FLECHAS DE SCROLL
    // ========================================
    const sections = ['inicio', 'autoridades', 'historia', 'actualidad', 'footer'];
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
    // NAVEGACIÓN TÁCTIL (SWIPE) PARA MÓVILES
    // ========================================
    let touchStartY = 0;    // Posición inicial del toque
    let touchEndY = 0;      // Posición final del toque
    let isScrolling = false; // Flag para prevenir múltiples navegaciones

    // Detectar cuando el usuario comienza a tocar la pantalla
    document.addEventListener('touchstart', function(e) {
        touchStartY = e.touches[0].clientY;
    }, { passive: true });

    // Detectar cuando el usuario termina de tocar la pantalla
    document.addEventListener('touchend', function(e) {
        if (isScrolling) return; // Prevenir si ya estamos navegando
        
        touchEndY = e.changedTouches[0].clientY;
        handleSwipe();
    }, { passive: true });

    // Procesar el gesto de swipe
    function handleSwipe() {
        const swipeDistance = touchStartY - touchEndY;
        const minSwipeDistance = 50; // Distancia mínima para considerar un swipe válido
        
        if (Math.abs(swipeDistance) > minSwipeDistance) {
            isScrolling = true;
            
            if (swipeDistance > 0) {
                // Swipe hacia arriba = siguiente sección
                goToNextSection();
            } else {
                // Swipe hacia abajo = sección anterior
                if (currentSectionIndex > 0) {
                    currentSectionIndex--;
                    const prevSection = document.getElementById(sections[currentSectionIndex]);
                    if (prevSection) {
                        prevSection.scrollIntoView({ 
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            }
            
            // Reactivar navegación después de un tiempo
            setTimeout(() => {
                isScrolling = false;
            }, 800);
        }
    }

    // ========================================
    // NAVEGACIÓN CON RUEDA DEL MOUSE (WHEEL)
    // ========================================
    let wheelTimeout;
    let isWheelScrolling = false;

    // document.addEventListener('wheel', function(e) {
    //     if (isWheelScrolling) return; // Prevenir navegación múltiple
        
    //     clearTimeout(wheelTimeout);
    //     wheelTimeout = setTimeout(() => {
    //         isWheelScrolling = true;
            
    //         if (e.deltaY > 0) {
    //             // Scroll hacia abajo = siguiente sección
    //             goToNextSection();
    //         } else {
    //             // Scroll hacia arriba = sección anterior
    //             if (currentSectionIndex > 0) {
    //                 currentSectionIndex--;
    //                 const prevSection = document.getElementById(sections[currentSectionIndex]);
    //                 if (prevSection) {
    //                     prevSection.scrollIntoView({ 
    //                         behavior: 'smooth',
    //                         block: 'start'
    //                     });
    //                 }
    //             }
    //         }
            
    //         // Reactivar navegación con rueda después de un tiempo
    //         setTimeout(() => {
    //             isWheelScrolling = false;
    //         }, 800);
    //     }, 100);
    // }, { passive: true });
    
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
// ESTILOS DINÁMICOS PARA ANIMACIONES
// ========================================
const indexStyle = document.createElement('style');
indexStyle.textContent = `
    /* Estado inicial de las secciones (ocultas) */
    .parallax-section {
        opacity: 0.9;
        transition: all 0.8s ease;
        transform: translateY(0);
    }
    
    /* Estado cuando las secciones son visibles */
    .parallax-section.animate-in {
        opacity: 1;
    }
    
    /* Animaciones específicas para elementos dentro de las secciones */
    .parallax-section.animate-in .section-title {
        animation: aparecerDesdeIzquierda 1s ease-out 0.2s both;
    }
    
    .parallax-section.animate-in .section-subtitle {
        animation: aparecerDesdeIzquierda 1s ease-out 0.4s both;
    }
    
    .parallax-section.animate-in .content-overlay {
        animation: aparecerDesdeDerecha 1s ease-out 0.6s both;
    }
`;
// Agregar los estilos al documento
document.head.appendChild(indexStyle);
