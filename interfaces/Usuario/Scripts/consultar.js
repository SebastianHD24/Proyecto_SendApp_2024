let estadoNotificacion = {
    pqr: false,
    citas: false,
    citasR: false
};

function actualizarNotificacion() {
    if (estadoNotificacion.pqr || estadoNotificacion.citas || estadoNotificacion.citasR) {
        document.querySelector('a[href="?p=notificaciones"] i').className = "bi bi-bell-fill";
    } else {
        document.querySelector('a[href="?p=notificaciones"] i').className = "bi bi-bell";
    }
}

function verificar() {
    fetch('../../../../Proyecto_SendApp_2024/interfaces/Usuario/mostrarPQR.php')
    .then(response => response.json())
    .then(data => {
        estadoNotificacion.pqr = data.num_registros > 0;
        actualizarNotificacion();
    })
    .catch(error => console.error("Error:", error));
}

function verificarC() {
    fetch('../../../../Proyecto_SendApp_2024/interfaces/Usuario/mostrarCitas.php')
    .then(response => response.json())
    .then(data => {
        estadoNotificacion.citas = data.num_registros > 0;
        actualizarNotificacion();
    })
    .catch(error => console.error("Error:", error));
}

function verificarCR() {
    fetch('../../../../Proyecto_SendApp_2024/interfaces/Usuario/mostrarCitasR.php')
    .then(response => response.json())
    .then(data => {
        estadoNotificacion.citasR = data.num_registros > 0;
        actualizarNotificacion();
    })
    .catch(error => console.error("Error:", error));
}

document.addEventListener('DOMContentLoaded', function() {
    verificar();
    verificarC();
    verificarCR();
});