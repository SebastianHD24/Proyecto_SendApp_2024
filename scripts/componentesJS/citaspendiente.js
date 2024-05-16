// Función para abrir el modal
    function openModal(id) {
    var modal = document.getElementById('modal_' + id);
    modal.style.display = "block";
}

// Función para cerrar el modal
function submitForm(id) {
    var form = document.getElementById('form_' + id);
    var justificacion = document.getElementById('justificacion_' + id).value;
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../../bases/mainInterfaz/backend/rechazarcita.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status === 200) {
            var response = xhr.responseText; // Obtener la respuesta del servidor
            if (response.trim() === "success") {
                // Redirigir si la actualización fue exitosa
                window.location.reload();
            } else {
                console.log('Error al enviar el formulario');
            }
        } else {
            console.log('Error al enviar el formulario');
        }
    };
    xhr.send('id_cita=' + id + '&justificacion=' + encodeURIComponent(justificacion));
}

//Bloque de codigo que crea  un formulario para enviar la id de la cita cliqueada y el documento la persona que solicito la cita al componente donde se termianara de aceptar la cita 
function aceptarCita(documento, id_cita) {
    // Crear un formulario oculto
    let form = document.createElement("form");
    form.setAttribute("method", "post"); // Establece el método de envío como POST
    form.setAttribute("action", "?p=aceptarcita"); // Establece la acción del formulario

    // Campo oculto para el documento
    let documentoField = document.createElement("input");
    documentoField.setAttribute("type", "hidden"); // Tipo de campo oculto
    documentoField.setAttribute("name", "documento"); // Nombre del campo
    documentoField.setAttribute("value", documento); // Valor del campo (el documento)

    // Campo oculto para el ID de la cita
    let idCitaField = document.createElement("input");
    idCitaField.setAttribute("type", "hidden"); // Tipo de campo oculto
    idCitaField.setAttribute("name", "id_cita"); // Nombre del campo
    idCitaField.setAttribute("value", id_cita); // Valor del campo (el ID de la cita)

    // Agregar campos al formulario
    form.appendChild(documentoField); // Agrega el campo del documento al formulario
    form.appendChild(idCitaField); // Agrega el campo del ID de la cita al formulario

    // Agregar formulario al cuerpo del documento
    document.body.appendChild(form); // Agrega el formulario al cuerpo del documento HTML

    // Enviar formulario
    form.submit(); // Envía el formulario
}