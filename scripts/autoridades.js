function abrirModal(imgUrl, nombre, cargo, descripcion) {
            const modal = document.getElementById('modalDirectivo');
            const modalImagen = document.getElementById('modalImagen');
            const modalNombre = document.getElementById('modalNombre');
            const modalCargo = document.getElementById('modalCargo');
            const modalDescripcion = document.getElementById('modalDescripcion');
            
            modalImagen.src = imgUrl;
            modalNombre.textContent = nombre;
            modalCargo.textContent = cargo;
            modalDescripcion.textContent = descripcion || 'Sin descripción disponible.';
            
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
