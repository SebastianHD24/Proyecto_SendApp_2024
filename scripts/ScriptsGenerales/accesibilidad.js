document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('toggle');
    const logos = document.querySelectorAll('.logo');

    // Verifica si hay un estado guardado en el almacenamiento local
    let isDarkMode = localStorage.getItem('darkMode') === 'true';

    // Aplica el modo oscuro si estaba activado la última vez que se visitó la página
    if (isDarkMode) {
        document.body.classList.add('dark');
        logos.forEach(logo => {
            logo.src = '../Inicio/Img-home/LogosSena-img/logoSendappDark2.png'
        });
        toggle.checked = true;
    }

    // Añade un event listener para detectar cambios en el estado del checkbox
    toggle.addEventListener('change', function (event) {
        let checked = event.target.checked;
        document.body.classList.toggle('dark', checked);
        logos.forEach(logo => {
            logo.src = checked ? '../Inicio/Img-home/LogosSena-img/logoSendappDark2.png': '../Inicio/Img-home/LogosSena-img/logoSendappDark2.png'
        })
        localStorage.setItem('darkMode', checked);
    });
});

