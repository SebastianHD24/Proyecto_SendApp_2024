document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('toggle');

    // Verifica si hay un estado guardado en el almacenamiento local
    let isDarkMode = localStorage.getItem('darkMode') === 'true';

    // Aplica el modo oscuro si estaba activado la última vez que se visitó la página
    if (isDarkMode) {
        document.body.classList.add('dark');
        toggle.checked = true;
    }

    // Añade un event listener para detectar cambios en el estado del checkbox
    toggle.addEventListener('change', function (event) {
        let checked = event.target.checked;
        document.body.classList.toggle('dark', checked);
        localStorage.setItem('darkMode', checked);
    });
});

