const ingreso = document.getElementById('ingreso');
const interfaz = document.getElementById('interfaz');

function veri() {
    fetch("../../../Proyecto_SendApp_2024/Login/login-aprendices/validacion/val_sesion.php")
        .then(response => response.json())
        .then(jsonData => {
            if (jsonData.success === 1) {
                ingreso.style.display = "none";
                interfaz.style.display = "block";
            } else if (jsonData.success === 2) {
                interfaz.style.display = "none";
                ingreso.style.display = "block";
            }
        })
        .catch(error => console.error("Error:", error));
}

document.addEventListener("DOMContentLoaded", function() {
    veri();
    console.log("se ejecuta el dom");
});