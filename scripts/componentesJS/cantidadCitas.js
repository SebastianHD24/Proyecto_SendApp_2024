let historial = document.getElementById('historial-oculto');
let  predeterminado = document.getElementById('notifications-panel');
let  enlaceHistorial=document.getElementById('historial'); 
let volver = document.getElementById('volver');
function verHistorial(){
    historial.style.display= "grid";
    predeterminado.style.display="none";
    enlaceHistorial.style.display="none";
    volver.style.display="block";
}

function regresar(){
     location.reload();
    console.log('mamguevo');
}

//Accedemos al elemento HTML
let estadoDeCita = document.querySelectorAll('.estado_cita');

//Iteramos sobre la lista de nodos y le pasamos un parametro que se va a convertir en el dato actual de cada elemento dentro de la lista
estadoDeCita.forEach(datoActual  => {
    //Verificamos si el contenido de texto que tiene cada nodo dentro de la lista es igual al estado que necesitamos
    if(datoActual.textContent.trim() === 'pendiente') 
    {
        datoActual.classList.add('estado_pendiente'); //Le añadimos una clase específica a cada estado
    } 
    else if(datoActual.textContent.trim() === 'rechazado') //Con la función trim() eleminamos los espacios sobrantes en caso de que el texto lo tenga
    { 
        datoActual.classList.add('estado_rechazado');
    }
    else if(datoActual.textContent.trim() === 'aceptado')
    {
        datoActual.classList.add('estado_aceptado');
    }
});
