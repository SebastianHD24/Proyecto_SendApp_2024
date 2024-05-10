function verificar() {
    fetch('../../../../Proyecto_SendApp_2024/interfaces/Usuario/mostrarPQR.php')
    .then(response => response.json())
    .then(data => {
        if (data.num_registros > 0) {
            document.querySelector('a[href="?p=notificaciones"] i').className = "bi bi-bell-fill";
        } else {
            document.querySelector('a[href="?p=notificaciones"] i').className = "bi bi-bell";
        }
    })
    .catch(error => console.error("Error:", error));
}

document.addEventListener('DOMContentLoaded', function() {
    verificar();
});