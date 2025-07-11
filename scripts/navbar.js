// ========================================
// FUNCIONALIDAD DE LA BARRA DE NAVEGACIÓN
// ========================================

document.addEventListener('DOMContentLoaded', function() {
    
    // ========================================
    // ANIMACIONES Y EFECTOS DE LOS BOTONES DEL MENÚ
    // ========================================
    const menuButtons = document.querySelectorAll('.menu-btn');
    
    // Aplicar efectos a cada botón del menú
    menuButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const href = this.getAttribute('href');

            // EFECTO VISUAL: Crear onda al hacer clic (ripple effect)
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            // Configurar propiedades del efecto onda
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');
            
            // Agregar el efecto visual al botón
            this.appendChild(ripple);
            
            // Eliminar el efecto después de que termine la animación
            setTimeout(() => {
                ripple.remove();
            }, 600);

            // NAVEGACIÓN: Manejar enlaces internos vs externos
            // Si el enlace es una ancla interna (#inicio, #autoridades), hacer scroll suave
            if (href && href.startsWith('#')) {
                e.preventDefault(); // Prevenir navegación por defecto
                
                const sectionId = href.substring(1); // Quitar el #
                const targetSection = document.getElementById(sectionId);
                
                if (targetSection) {
                    // Pequeña pausa para que el efecto visual sea visible
                    setTimeout(() => {
                        targetSection.scrollIntoView({ 
                            behavior: 'smooth',
                            block: 'start' 
                        });
                    }, 100);
                }
            }
            // Si es un enlace a otra página, dejar que el navegador lo maneje normalmente
        });
        
        // EFECTOS HOVER: Animaciones al pasar el mouse
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px) scale(1.02)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
    
    // ========================================
    // EFECTOS DE SCROLL EN LA BARRA DE NAVEGACIÓN
    // ========================================
    const navbar = document.querySelector('.navbar');
    let lastScrollTop = 0; // Para detectar dirección del scroll
    
    if (navbar) {
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            // CAMBIO DE APARIENCIA: Navbar más opaco al hacer scroll
            if (scrollTop > 50) {
                navbar.style.background = 'rgba(3, 26, 47, 0.8)';
                navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.3)';
            } else {
                navbar.style.background = 'rgba(3, 26, 47, 0.5)';
                navbar.style.boxShadow = 'none';
            }
            
            // OCULTAR/MOSTRAR NAVBAR: Esconder al scrollear hacia abajo, mostrar al subir
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                // Usuario scrolleando hacia abajo - ocultar navbar
                navbar.style.transform = 'translateY(-100%)';
            } else {
                // Usuario scrolleando hacia arriba - mostrar navbar
                navbar.style.transform = 'translateY(0)';
            }
            
            // Actualizar posición anterior del scroll
            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        });
    }
    
    // Mensaje de confirmación en consola
    console.log('🎓 Técnica N°1 de Vicente López - Barra de navegación cargada correctamente');

    // Menú hamburguesa responsive
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
    const closeMobileMenuBtn = document.getElementById('closeMobileMenu');

    function openMobileMenu() {
        mobileMenu.classList.add('open');
        mobileMenuOverlay.classList.add('open');
        document.body.style.overflow = 'hidden';
    }
    function closeMobileMenu() {
        mobileMenu.classList.remove('open');
        mobileMenuOverlay.classList.remove('open');
        document.body.style.overflow = '';
    }

    if (hamburgerBtn && mobileMenu && mobileMenuOverlay) {
        hamburgerBtn.addEventListener('click', openMobileMenu);
        mobileMenuOverlay.addEventListener('click', closeMobileMenu);
        // Cerrar al hacer clic en un enlace del menú móvil
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });
    }
    // Cerrar con la cruz
    if (closeMobileMenuBtn) {
        closeMobileMenuBtn.addEventListener('click', closeMobileMenu);
    }
});

// ========================================
// ESTILOS DINÁMICOS PARA EFECTOS VISUALES
// ========================================
const navbarStyle = document.createElement('style');
navbarStyle.textContent = `
    /* Efecto de onda al hacer clic en botones */
    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.6);
        transform: scale(0);
        animation: efecto-onda 0.6s linear;
        pointer-events: none;
    }
    
    @keyframes efecto-onda {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
    
    /* Configuración base para efectos en botones */
    .menu-btn {
        position: relative;
        overflow: hidden;
    }
`;
// Agregar los estilos al documento
document.head.appendChild(navbarStyle);
