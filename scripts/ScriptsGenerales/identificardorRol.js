function verificarRol() {
    fetch("../../../Proyecto_SendApp_2024/bases/idRol.php")
        .then(response => response.json())
        .then(jsonData => {
            if (jsonData.success == 1) {
                // Obtener referencia al script
                var scriptElement = document.createElement('script');
                scriptElement.src = "../../../Proyecto_SendApp_2024/interfaces/Administrador/Scripts/consulta.js";

                // Insertar el script en el DOM si aún no está presente
                if (!document.querySelector('script[src="' + scriptElement.src + '"]')) {
                    document.body.appendChild(scriptElement);
                }
            }
        })
        .catch(error => console.error("Error:", error));
}
verificarRol();