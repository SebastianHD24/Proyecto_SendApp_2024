function verificar() {
    fetch('../../../../Proyecto_SendApp_2024/interfaces/Usuario/mostrarPQR.php')
    .then(response => response.json())
    .then(jsonData => {
        if (jsonData.success == "1") {
            document.querySelector('a[href="?p=notificaciones"] i').className = "bi bi-bell-fill";
        } else if (jsonData.success == "2") {
            document.querySelector('a[href="?p=notificaciones"] i').className = "bi bi-bell";
        }
    })
    .catch(error => console.error('Error fetching data:', error));
}

document.addEventListener('DOMContentLoaded', function() {
    verificar();
});