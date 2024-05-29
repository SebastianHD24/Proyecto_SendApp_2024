// Función para abrir el modal
function openModal(type, id) {
    var modal = document.getElementById('modal_' + type + '_' + id);
    modal.style.display = "block";
}

// Función para cerrar el modal
function closeModal(id) {
    var modal = document.getElementById('modal_' + id);
    if (modal) {
        modal.style.display = "none";
    } else {
        console.error("El modal con ID " + id + " no fue encontrado.");
    }
}

// Función para desbloquear los botones Confirmar y Cancelar al aceptar la cita
function unlockButtons(id) {
    document.querySelector(`#row_${id} .button:not(.disabled)`).classList.remove('disabled');
}

// Función para bloquear todos los botones al confirmar la cita
function blockAllButtons(id) {
    var buttons = document.querySelectorAll(`#row_${id} .button`);
    buttons.forEach(function(button) {
        button.classList.add('disabled');
    });
}

// Función para enviar el formulario de aceptación
function submitAcceptanceForm(id) {
    // Bloquear todos los botones
    blockAllButtons(id);

    // Aquí puedes agregar tu código para enviar el formulario de aceptación
}

// Función para enviar el formulario de cancelación
function submitCancellationForm(id) {
    // Bloquear todos los botones
    blockAllButtons(id);

    var justificacion = document.getElementById('justificacion_cancelacion_' + id).value;

    fetch('../../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/cancelarcita.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'id_cita=' + id + '&justificacion=' + encodeURIComponent(justificacion)
    })
    .then(function(response) {
        if (response.ok) {
            window.location.reload();
        } else {
            console.log('Error al cancelar la cita');
        }
    })
    .catch(function(error) {
        console.log('Error al cancelar la cita: ', error);
    });
}

// Función para enviar el formulario de rechazo
function submitRejectionForm(id) {
    var justificacion = document.getElementById('justificacion_' + id).value;

    fetch('../../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/rechazarcita.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'id_cita=' + id + '&justificacion=' + encodeURIComponent(justificacion)
    })
    .then(function(response) {
        if (response.ok) {
            window.location.reload();
        } else {
            console.log('Error al enviar el formulario');
        }
    })
    .catch(function(error) {
        console.log('Error al enviar el formulario: ', error);
    });
}
// Función para mostrar el formulario de rechazo
function mostrarFormularioRechazo(id) {
    var modal = document.getElementById('modal_' + id);
    modal.style.display = "block";
}

// Función para enviar el formulario
function submitForm(id) {
    // Invocar a la función de envío de rechazo
    submitRejectionForm(id);
}


//Bloque de codigo que crea un formulario para enviar la ID de la cita cliqueada y el documento de la persona que solicitó la cita al componente donde se terminará de aceptar la cita 
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

function confirmarCita(id) {
    fetch('../../../../Proyecto_SendApp_2024/bases/mainInterfaz/componentes/confirmarcita.php?id_cita=' + id)
        .then(function(response) {
            if (response.ok) {
                window.location.reload();
            } else {
                console.log('Error al confirmar la cita');
            }
        })
        .catch(function(error) {
            console.log('Error al confirmar la cita: ', error);
        });
}

document.querySelector('.citasRechazadas').addEventListener('click', function() {
    // Alternar la visibilidad del contenido de citas rechazadas
    var content = document.getElementById('rechazadasContent');
    if (content.style.display === 'none') {
        content.style.display = 'block';
    } else {
        content.style.display = 'none';
    }
});





