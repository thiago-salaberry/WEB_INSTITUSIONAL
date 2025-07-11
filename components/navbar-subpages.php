<header class="navbar">
    <div class="navbar-container">
        <!-- Logo -->
        <div class="logo-container">
            <a href="../index.php">
                <img src="../img/logo.webp" alt="Logo Técnica N°1" class="logo" id="logoBtn">
            </a>
        </div>
        <!-- Botón hamburguesa (solo visible en mobile) -->
        <button class="hamburger" id="hamburgerBtn" aria-label="Abrir menú">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <!-- Menú móvil lateral -->
        <nav class="mobile-menu" id="mobileMenu">
            <button class="close-btn" id="closeMobileMenu" aria-label="Cerrar menú">
                <i class="fas fa-times"></i>
            </button>
            <a href="../index.php" class="menu-btn" data-section="inicio">Inicio</a>
            <a href="autoridades.php" class="menu-btn" data-section="autoridades">Autoridades</a>
            <a href="especialidades.php" class="menu-btn" data-section="especialidades">Especialidades</a>
            <a href="inscripciones.php" class="menu-btn" data-section="inscripciones">Inscripciones 2026</a>
            <a href="#" class="menu-btn moodle-btn" data-section="moodle">Moodle</a>
            <div class="mobile-social">
                <a href="#" class="social-link">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-link">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-link">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </nav>
        <!-- Overlay para cerrar menú -->
        <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>

        <!-- Menú principal -->
        <nav class="main-menu">
            <a href="../index.php" class="menu-btn" data-section="inicio">
                <span>Inicio</span>
            </a>
            <a href="autoridades.php" class="menu-btn" data-section="autoridades">
                <span>Autoridades</span>
            </a>
            <a href="especialidades.php" class="menu-btn" data-section="especialidades">
                <span>Especialidades</span>
            </a>
            <a href="inscripciones.php" class="menu-btn" data-section="inscripciones">
                <span>Inscripciones 2026</span>
            </a>
            <a href="#" class="menu-btn moodle-btn" data-section="moodle">
                <span>Moodle</span>
            </a>
        </nav>
    </div>
</header>
