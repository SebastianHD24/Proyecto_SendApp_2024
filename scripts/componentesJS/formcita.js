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

// Evento de teclado (input) para el conteo de los caracteres de la descripcion de la cita
document.addEventListener('DOMContentLoaded', (event) => {
    const textarea = document.getElementById('descripcion');
    const charCount = document.getElementById('charCount');

    textarea.addEventListener('input', () => {
        const currentLength = textarea.value.length;
        charCount.textContent = `${currentLength}/1000`;

        if (currentLength >= 1000) {
            textarea.value = textarea.value.substring(0, 999);
        }
    });
});

// Funcionalidad para cerrar el formulario y mostrar el contenido
let btnCerrar = document.getElementById('btnCerrar');

btnCerrar.addEventListener('click', (event) => {
    event.preventDefault();
    const textarea = document.getElementById('descripcion');
    textarea.value = "";
    const charCount = document.getElementById('charCount');
    charCount.textContent = "0/1000";
    contenedor.classList.add('oculto');
    div_container.classList.remove('oculto');
});

// Función para cambiar el texto cuando se pasa el mouse sobre el div .cards
function cambiarTextoServicioDeshabilitado(event) {
    let divCards = event.currentTarget; // Obtener el div .cards sobre el cual se activó el evento
    let boton = divCards.querySelector('.btn'); // Obtener el botón dentro del div .cards
    let textoAgendarCita = boton.querySelector('.txt2'); // Obtener el elemento <p> con clase 'txt2'
    
    if (boton.disabled) {
        textoAgendarCita.textContent = 'Servicio deshabilitado por el momento'; // Cambiar el texto del segundo párrafo
    } else {
        textoAgendarCita.textContent = 'Agendar Cita'; // Restablecer el texto si no está deshabilitado
    }
}

// Función para restablecer el texto original cuando el mouse sale del div .cards
function restablecerTextoAgendarCita(event) {
    let divCards = event.currentTarget; // Obtener el div .cards sobre el cual se activó el evento
    let boton = divCards.querySelector('.btn'); // Obtener el botón dentro del div .cards
    let textoAgendarCita = boton.querySelector('.txt2'); // Obtener el elemento <p> con clase 'txt2'
    
    textoAgendarCita.textContent = 'Agendar Cita'; // Restaurar el texto original cuando el mouse sale del div .cards
}

// Obtener todos los contenedores .cards
const divsCards = document.querySelectorAll('.cards');

// Iterar sobre cada contenedor .cards para añadir eventos
divsCards.forEach(function(divCards) {
    divCards.addEventListener('mouseover', cambiarTextoServicioDeshabilitado);
    divCards.addEventListener('mouseout', restablecerTextoAgendarCita);
});