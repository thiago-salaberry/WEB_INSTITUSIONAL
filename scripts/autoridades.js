function abrirModal() {
            const modal = document.getElementById('modalDirectivo');
            
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        // Función para cerrar el modal
        function cerrarModal() {
            const modal = document.getElementById('modalDirectivo');
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Cerrar modal al hacer clic fuera de él
        window.onclick = function(event) {
            const modal = document.getElementById('modalDirectivo');
            if (event.target === modal) {
                cerrarModal();
            }
        }

        // Cerrar modal con la tecla Escape
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                cerrarModal();
            }
        });
