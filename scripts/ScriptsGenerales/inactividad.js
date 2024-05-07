function tiempo_espera(){
    let tiempo_inactividad = 1800000;

    function cerrar_sesion(){
        location.href = "../../../Proyecto_SendApp_2024/Login/login-aprendices/validacion/cerrar_sesion.php";
    }

    function restablecer_temporizador(){
        clearTimeout(temporizadorInactividad);
        temporizadorInactividad = setTimeout(cerrar_sesion, tiempo_inactividad);
    }

    document.addEventListener("mousemove", restablecer_temporizador);
    document.addEventListener("keypress", restablecer_temporizador);

    let temporizadorInactividad = setTimeout(cerrar_sesion, tiempo_inactividad);
}

function verificarSesion() {
    fetch("../../../Proyecto_SendApp_2024/Login/login-aprendices/validacion/val_sesion.php")
        .then(response => response.json())
        .then(jsonData => {
            if (jsonData.success === 1) {
                tiempo_espera();
                console.log("Sesión iniciada");
            } else if (jsonData.success === 2) {
                console.log("No hay sesión");
            }
        })
        .catch(error => console.error("Error:", error));
}

document.addEventListener("DOMContentLoaded", function() {
    verificarSesion();
});