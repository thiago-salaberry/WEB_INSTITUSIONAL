// Seleccionar todos los links del menú lateral
const sectionLinks = document.querySelectorAll('.section-link');

// Agregar evento a cada link
sectionLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();

        // Ocultar todas las secciones dentro del bloque actual
        const currentBlock = document.querySelector('.content:not(.hidden)');
        currentBlock.querySelectorAll('.section-content').forEach(section => {
            section.classList.add('hidden');
        });

        // Mostrar la sección seleccionada
        const sectionId = this.getAttribute('data-section');
        document.getElementById(sectionId).classList.remove('hidden');
    });
});

// Manejo de las pestañas (Electrónica / Programación)
const tabs = document.querySelectorAll('.tab');
tabs.forEach(tab => {
    tab.addEventListener('click', function() {
        // Desactivar todas las pestañas
        tabs.forEach(t => t.classList.remove('active'));

        // Activar la pestaña actual
        this.classList.add('active');

        // Ocultar todos los bloques de contenido
        document.querySelectorAll('.content').forEach(content => {
            content.classList.add('hidden');
        });

        // Mostrar el bloque seleccionado
        const contentClass = this.id === 'electronica' ? 'text-electronica' : 'text-programacion';
        const activeContent = document.querySelector(`.${contentClass}`);
        activeContent.classList.remove('hidden');

        // Mostrar siempre "Información Básica" al cambiar de bloque
        // Ocultar todas las secciones dentro del bloque seleccionado
        activeContent.querySelectorAll('.section-content').forEach(section => {
            section.classList.add('hidden');
        });

        // Mostrar "Información Básica" para el bloque correspondiente
        const sectionId = this.id === 'electronica' ? 'info-electronica' : 'info-programacion';
        document.getElementById(sectionId).classList.remove('hidden');
    });
});

// Inicialización: Mostrar "Información Básica" de Electrónica por defecto al cargar
document.querySelector('.text-electronica').classList.remove('hidden');
document.getElementById('info-electronica').classList.remove('hidden');

// Asegurarse de que la sección "Información Básica" de Programación también se maneje correctamente si es necesario
document.querySelector('.text-programacion').classList.add('hidden');

    function openModal(img) {
        const modal = document.getElementById('modal');
        const modalImage = document.getElementById('modalImage');
        modalImage.src = img.src;
        modal.classList.add('open');
    }

    function closeModal() {
        const modal = document.getElementById('modal');
        modal.classList.remove('open');
    }