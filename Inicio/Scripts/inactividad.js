function tiempo_espera(){
    let tiempo_inactividad = 9000;
        
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

$.ajax({
    type: "POST",
    url: "../../../Proyecto_SendApp_2024/Login/login-aprendices/validacion/val_sesion.php",
    data: {
    },
    success: function(response) { // Función que se ejecuta si la solicitud es exitosa
        let jsonData = JSON.parse(response);
        if (jsonData.success == "1") { // Si la respuesta indica éxito
            tiempo_espera();
        } else if (jsonData.success == "2"){
            console.log("no sesion");
        } else {
            console.log("nada :c");
        }
    }
});