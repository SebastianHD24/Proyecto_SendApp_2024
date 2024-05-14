// Función para capturar el ID del servicio al hacer clic en los botones
function capturar_id_servicio(id_servicio) {
    document.getElementById('id_servicio').value = id_servicio;

    // Llamar a una función para obtener y mostrar el nombre del funcionario
    obtenerNombresFuncionarios(id_servicio);
}

// Función para obtener y mostrar el nombre del funcionario
function obtenerNombresFuncionarios(id_servicio) {
    fetch("../../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/nombreFuncionario.php?id_servicio=" + id_servicio)
        .then(response => response.json())
        .then(funcionarios => {
            let selectFuncionario = document.querySelector('.funcionario');

            // Limpiar el select antes de agregar nuevas opciones
            selectFuncionario.innerHTML = "";

            // Iterar sobre cada objeto de funcionario y agregarlo como una opción en el select
            funcionarios.forEach(function(funcionario) {
                let option = document.createElement('option');
                option.value = funcionario.id_usuario; // Asignar el ID del funcionario al value
                option.text = funcionario.nombre + ' ' + funcionario.apellido; // Concatenar nombre y apellido
                selectFuncionario.add(option);
            });
        })
        .catch(error => console.error('Error al obtener los datos de los funcionarios:', error));
}
