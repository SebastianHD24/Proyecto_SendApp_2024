var cerrarButton = document.getElementsByClassName("cerrar")[0];

var botonEnviar = document.getElementsByClassName("button")[1];

var modal = document.getElementById("myModal");

let forr = document.getElementById('formularioo');

let enviar = document.getElementById('buttonEnviar');

//CUMPLIR LA ACCION DEL FORM
enviar.addEventListener("click", function (e) {
    if (modal.style.display !== "block") {
        e.preventDefault();
        modal.style.display = "block";

        setTimeout(function () {
            modal.style.display = "none";
            //Se redirecciona al usuario a la interfaz de usuarioSesion.php
            window.location.href = "../../interfaces/Usuario/usuarioSesion.php"; 
        }, 3000);
    }
});


// Cuando el usuario haga clic en el botón de cerrar, cierra la ventana modal
closeButton.onclick = function () {
    modal.style.display = "none";
}
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

console.log("hola")