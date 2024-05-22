const ingreso = document.getElementById('ingreso');
const interfaz_u = document.getElementById('interfaz-u');
const cerrar = document.getElementById('cerrar-sesion');
const ingreso_reponsive = document.querySelectorAll('#ingreso-responsive');
const interfaz_u_responsive = document.querySelectorAll('#interfaz-u-responsive');
const cerrar_responsive = document.querySelectorAll('#cerrar-sesion-responsive');

function veri() {
    fetch("../../../Proyecto_SendApp_2024/Login/login-aprendices/validacion/val_sesion.php")
        .then(response => response.json())
        .then(jsonData => {
            if (jsonData.success === 1) {
                ingreso.style.display = "none";
                ingreso_reponsive[0].style.display = "none";
                interfaz_u.style.display = "block";
                cerrar.style.display = "block";
                interfaz_u_responsive[0].style.display = "flex";
                cerrar_responsive[0].style.display = "flex";
            } else if (jsonData.success === 2) {
                ingreso.style.display = "block";
                ingreso_reponsive.style.display = "block";
                interfaz_u.style.display = "none";
                cerrar.style.display = "none";
                interfaz_u_responsive.style.display = "none";
                cerrar_responsive.style.display = "none";
            }
        })
        .catch(error => console.error("Error:", error));
}

function llevarURL() {
    fetch("../../../Proyecto_SendApp_2024/bases/idRol.php")
        .then(response => response.json())
        .then(jsonData => {
            if (jsonData.success == 1) {
                window.location.href = "../../../Proyecto_SendApp_2024/interfaces/Administrador/Administrador.php";
            } else if (jsonData.success == 2) {
                window.location.href = "../../../Proyecto_SendApp_2024/interfaces/Funcionario/funcionario.php";
            } else if (jsonData.success == 3) {
                window.location.href = "../../../Proyecto_SendApp_2024/interfaces/Usuario/usuarioSesion.php";
            }
        })
        .catch(error => console.error("Error:", error));
}

function cerrarSesion() {
    ingreso.style.display = "block";
    interfaz_u.style.display = "none";
    cerrar.style.display = "none";
    interfaz_u_responsive.style.display = "none";
    cerrar_responsive.style.display = "none";
}

document.addEventListener("DOMContentLoaded", function() {
    veri();
});