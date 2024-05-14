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
    .then(nombres_apellidos_funcionarios => {
        let selectFuncionario = document.querySelector('.funcionario');
        
        // Limpiar el select antes de agregar nuevas opciones
        selectFuncionario.innerHTML = "";

        // Iterar sobre cada objeto de nombre y apellido y agregarlos como una opción en el select
        nombres_apellidos_funcionarios.forEach(function(funcionario) {
            let option = document.createElement('option');
            option.text = funcionario.nombre + ' ' + funcionario.apellido; // Concatenar nombre y apellido
            selectFuncionario.add(option);
        });
    })
    .catch(error => console.error('Error al obtener los nombres de los funcionarios:', error));
}