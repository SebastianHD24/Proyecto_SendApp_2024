document.addEventListener('DOMContentLoaded', function() {
    let Historial = document.getElementById('historial-oculto');
    let predeterminado = document.getElementById('notifications-panel');
    let enlaceHistorial = document.getElementById('historial'); 
    let volver = document.getElementById('volver');
    let nohistorial = document.getElementById('AlertaNocitas');

    function verHistorial() {
        if (Historial) Historial.style.display = "flex"; // Usar flex en lugar de block
        if (predeterminado) predeterminado.style.display = "none";
        if (enlaceHistorial) enlaceHistorial.style.display = "none";
        if (volver) volver.style.display = "block";
        if (nohistorial) nohistorial.style.display = "none";
    }

    function regresar() {
        if (Historial) Historial.style.display = "none";
        if (predeterminado) predeterminado.style.display = "flex";
        if (enlaceHistorial) enlaceHistorial.style.display = "block";
        if (volver) volver.style.display = "none";
        if (nohistorial) nohistorial.style.display = "block";  // Ajusta esto según tu lógica
    }

    if (enlaceHistorial) enlaceHistorial.addEventListener('click', verHistorial);
    if (volver) volver.addEventListener('click', regresar);

    //Accedemos al elemento HTML
    let estadoDeCita = document.querySelectorAll('.estado_cita');

    //Iteramos sobre la lista de nodos y le pasamos un parametro que se va a convertir en el dato actual de cada elemento dentro de la lista
    estadoDeCita.forEach(datoActual => {
        //Verificamos si el contenido de texto que tiene cada nodo dentro de la lista es igual al estado que necesitamos
        if (datoActual.textContent.trim() === 'pendiente') {
            datoActual.classList.add('estado_pendiente'); //Le añadimos una clase específica a cada estado
        } else if (datoActual.textContent.trim() === 'rechazado') { //Con la función trim() eliminamos los espacios sobrantes en caso de que el texto lo tenga
            datoActual.classList.add('estado_rechazado');
        } else if (datoActual.textContent.trim() === 'aceptado') {
            datoActual.classList.add('estado_aceptado');
        }
    });
});