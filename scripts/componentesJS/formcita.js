let buttonBiblioteca = document.getElementById('biblioteca'),
buttonBienestar = document.getElementById('Bienestar');
let contenedor = document.querySelector('.container');
let div_container = document.querySelector('.div__content');
// Obtener referencias a los botones
const botones = [buttonBienestar, buttonBiblioteca];

// Definir el evento
function mostrarContenedor() {
    contenedor.classList.remove('oculto');
    div_container.classList.add('oculto');
}

// Asignar el evento a cada botón
botones.forEach(boton => {
    boton.addEventListener('click', mostrarContenedor);
});


// buttonBienestar.addEventListener('click', function(){
//     contenedor.classList.remove('oculto');
//     div_container.classList.add('oculto');
// });
// buttonBiblioteca.addEventListener('click', function(){
//     contenedor.classList.remove('oculto');
//     div_container.classList.add('oculto');
// });
