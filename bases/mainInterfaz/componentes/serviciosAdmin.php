        <div>
            <h1>puto</h1>
        </div>
    </main> 
</div>
<?php if ($id_rol != 1): ?>
    <script>
        // Esperar a que el DOM esté cargado
        document.addEventListener('DOMContentLoaded', function() {
            // Obtener la URL actual
            let urlActual = window.location.href;
            
            <?php if ($id_rol == 3): ?>
                //  Si no es admin lo redirecciona al modulo principal de su rol
                let nuevaUrl = urlActual.replace('p=serviciosAdmin', 'p=servicios');
                window.history.pushState({}, '', nuevaUrl);
                // Recargar la página con la nueva URL
                window.location.href = nuevaUrl;
            <?php endif; ?>
        });
    </script>
<?php endif; ?>