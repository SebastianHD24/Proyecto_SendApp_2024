// botones de para cada area
let buttonBienestar = document.getElementById('Bienestar'); //boton bienestar
let buttonBiblioteca = document.getElementById('Biblioteca'); //boton Biblioteca
let buttonCoordinacion = document.getElementById('Coordinacion'); //boton Coordinación Académica
let buttonAdministracion = document.getElementById('Administracion'); //boton Administración
let buttonFondoE = document.getElementById('FondoE'); //boton Fondo Emprender
let buttonRelacionesC = document.getElementById('RelacionesC'); //boton Relaciones Corporativas
let buttonSennova = document.getElementById('Sennova'); //boton Sennova
let buttonServiciosT = document.getElementById('ServiciosT'); //boton Servicios Tecnológicos
let buttonFabricaS = document.getElementById('FabricaS'); //boton Fábrica De Software
let buttonTecnoA = document.getElementById('TecnoA'); //boton Tecno Academia
let buttonTecnoP = document.getElementById('TecnoP'); //boton Tecno Parque

// contenedores
let contenedor = document.querySelector('.container'); //contenedor formulario
let div_container = document.querySelector('.div__content'); //contenedor informacion servicios


// -----------------------------------------------------------------------
//funciones independientes para cada boton, para mostrar el formulario

// funcion boton para agendar cita en bienestar
buttonBienestar.addEventListener('click', function(){
    contenedor.classList.remove('oculto');
    div_container.classList.add('oculto');
});

// funcion boton para agendar cita en Biblioteca
buttonBiblioteca.addEventListener('click', function(){
    contenedor.classList.remove('oculto');
    div_container.classList.add('oculto');
});

// funcion boton para agendar cita en Coordinación Académica
buttonCoordinacion.addEventListener('click', function(){
    contenedor.classList.remove('oculto');
    div_container.classList.add('oculto');
});

// funcion boton para agendar cita en Administración
buttonAdministracion.addEventListener('click', function(){
    contenedor.classList.remove('oculto');
    div_container.classList.add('oculto');
});

// funcion boton para agendar cita en Fondo Emprender
buttonFondoE.addEventListener('click', function(){
    contenedor.classList.remove('oculto');
    div_container.classList.add('oculto');
});

// funcion boton para agendar cita en Relaciones Corporativas
buttonRelacionesC.addEventListener('click', function(){
    contenedor.classList.remove('oculto');
    div_container.classList.add('oculto');
});

// funcion boton para agendar cita en Sennova
buttonSennova.addEventListener('click', function(){
    contenedor.classList.remove('oculto');
    div_container.classList.add('oculto');
});

// funcion boton para agendar cita en Servicios Tecnológicos
buttonServiciosT.addEventListener('click', function(){
    contenedor.classList.remove('oculto');
    div_container.classList.add('oculto');
});

// funcion boton para agendar cita en Fábrica De Software
buttonFabricaS.addEventListener('click', function(){
    contenedor.classList.remove('oculto');
    div_container.classList.add('oculto');
});

// funcion boton para agendar cita en Tecno Academia
buttonTecnoA.addEventListener('click', function(){
    contenedor.classList.remove('oculto');
    div_container.classList.add('oculto');
});

// funcion boton para agendar cita en Tecno Parque
buttonTecnoP.addEventListener('click', function(){
    contenedor.classList.remove('oculto');
    div_container.classList.add('oculto');
});

console.log("hola soy Dios")
