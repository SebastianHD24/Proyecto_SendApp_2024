document.addEventListener("DOMContentLoaded", function() {
    let botonesLeerMas = document.querySelectorAll('.leerMas');
    let botonesLeerMenos = document.querySelectorAll('.leerMenos');

    botonesLeerMas.forEach(function(botonLeerMas) {
        botonLeerMas.addEventListener('click', function(event) {
            event.preventDefault();
            let contenidoExpandido = this.nextElementSibling;
            let botonLeerMenos = contenidoExpandido.nextElementSibling;

            contenidoExpandido.classList.add('expandido');
            botonLeerMenos.classList.add('visible');
            this.classList.remove('visible');
        });
    });

    botonesLeerMenos.forEach(function(botonLeerMenos) {
        botonLeerMenos.addEventListener('click', function(event) {
            event.preventDefault();
            let contenidoExpandido = this.previousElementSibling;
            let botonLeerMas = contenidoExpandido.previousElementSibling;

            contenidoExpandido.classList.remove('expandido');
            botonLeerMas.classList.add('visible');
            this.classList.remove('visible');
        });
    });
});
