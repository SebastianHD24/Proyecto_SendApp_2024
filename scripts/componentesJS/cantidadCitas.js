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
