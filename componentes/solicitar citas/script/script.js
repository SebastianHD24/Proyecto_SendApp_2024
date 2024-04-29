var cerrarButton = document.getElementsByClassName("cerrar")[0];

var botonEnviar = document.getElementsByClassName("button")[1];

var modal = document.getElementById("myModal");

let forr = document.getElementById('formularioo');


function ve() {
    forr.addEventListener("submit", function (e) {
        e.preventDefault();
        modal.style.display = "block";
    });

    setTimeout(function () {
        modal.style.display = "none";
    }, 3000);
}


// Cuando el usuario haga clic en el botón de cerrar, cierra la ventana modal
closeButton.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

