// Referencias a los botones de las áreas
let buttonBienestar = document.getElementById('Bienestar');
let buttonBiblioteca = document.getElementById('Biblioteca');
let buttonCoordinacion = document.getElementById('psicologia');
let buttonAdministracion = document.getElementById('Administracion');
let buttonFondoE = document.getElementById('FondoE');
let buttonRelacionesC = document.getElementById('RelacionesC');
let buttonSennova = document.getElementById('Sennova');
let buttonServiciosT = document.getElementById('ServiciosT');
let buttonFabricaS = document.getElementById('FabricaS');
let buttonTecnoA = document.getElementById('Deportes');
let buttonTecnoP = document.getElementById('TecnoP');

// Contenedores de formulario e información
let contenedor = document.querySelector('.container');
let div_container = document.querySelector('.div__content');

// Función para mostrar el formulario y ocultar el contenido
function mostrarFormulario() {
    contenedor.classList.remove('oculto');
    div_container.classList.add('oculto');
}

// Lista de botones a los que queremos asignar el evento
let botones = [
    buttonBienestar,
    buttonBiblioteca,
    buttonCoordinacion,
    buttonAdministracion,
    buttonFondoE,
    buttonRelacionesC,
    buttonSennova,
    buttonServiciosT,
    buttonFabricaS,
    buttonTecnoA,
    buttonTecnoP
];

// Asignar el evento 'click' a cada botón usando un foreach
botones.forEach(boton => {
    if (boton) { // Verifica que el botón existe antes de agregar el evento
        boton.addEventListener('click', mostrarFormulario);
    } else {
        console.warn('Un botón no fue encontrado');
    }
});

console.log("hola soy Dios");