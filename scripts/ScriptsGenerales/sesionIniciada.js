const ingreso = document.getElementById('ingreso');
const interfaz_u = document.getElementById('interfaz-u');

function veri() {
    fetch("../../../Proyecto_SendApp_2024/Login/login-aprendices/validacion/val_sesion.php")
        .then(response => response.json())
        .then(jsonData => {
            if (jsonData.success === 1) {
                ingreso.style.display = "none";
                interfaz_u.style.display = "block";
            } else if (jsonData.success === 2) {
                interfaz_u.style.display = "none";
                ingreso.style.display = "block";
            }
        })
        .catch(error => console.error("Error:", error));
}

function llevarURL() {
    console.log("hi")
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


document.addEventListener("DOMContentLoaded", function() {
    veri();
    console.log("se ejecuta el domm");
});